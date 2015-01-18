<?php
include_once(dirname(__FILE__) . '/check.class.php');
include_once(dirname(__FILE__) . '/integration.class.php');
$check = new Check(false);

class Profile extends Generic {

	private $settings = array();
	private $error;

	public $guest;

	function __construct() {

		/* Prevent guests if the admin hasn't enabled public profiles. */
		if ( !parent::getOption('profile-public-enable') )
			protect('*');

		/* If the admin requires users to update their password. */
		if(!empty($_SESSION['pickme']['forcePwUpdate']))
			$msg = "<div class='alert alert-warning'>" . _('<strong>Alert</strong>: The administrator has requested all users to update their passwords.') . "</div>";

		// Save the username
		$this->username = !empty($_SESSION['pickme']['username']) ? $_SESSION['pickme']['username'] : _('Guest');

		/* Check if the user is a guest to this profile. */
		$this->determineGuest();

		if (!$this->guest && !empty($_POST)) :
			$this->retrieveFields();

			foreach ($_POST as $field => $value)
				$this->settings[$field] = parent::secure($value);

			// Validate fields
			$this->validate();

			// Process form
			if(empty($this->error)) $this->process();

		endif;

		$this->retrieveFields();

		if(!$this->guest && isset($_GET['key']) && strlen($_GET['key']) == 32) {
			$this->key = parent::secure($_GET['key']);
			$this->updateEmailorPw();
			$this->retrieveFields();
		}

		if ( !empty ( $this->error ) || !empty ( $msg ) )
			parent::displayMessage( !empty($this->error) ? $this->error : (!empty($msg) ? $msg : ''), false);

	}

	private function determineGuest() {

		if ( !empty($_SESSION['pickme']['user_id']) && empty($_GET['uid']) )
			$this->user_id = $_SESSION['pickme']['user_id'];

		else if ( !empty($_GET['uid']) )
			$this->user_id = (int) $_GET['uid'];

		else
			$this->user_id = _('Guest');

		$this->guest = !( !empty($_SESSION['pickme']['user_id']) && $_SESSION['pickme']['user_id'] == $this->user_id );

	}

	// Retrieve name, email, user_id
	private function retrieveFields() {

		$params = array( ':user_id' => $this->user_id ); 
                $level = ($_SESSION['pickme']); //print_r( $level );
                if( protectThis("3") ){
                    $sql = " SELECT `user_id`, `username`, `user_level`,`name`, `lname`, `email`, `image`, dob, sex ";
                    $stmt2 = parent::query( "SELECT * FROM projects WHERE `uid` = :user_id" , $params);
                    $stmt3 = parent::query( "SELECT * FROM skills WHERE `uid` = :user_id" , $params);
                    if ($stmt2->rowCount() >= 1){
                     $sql.= " ,pname,pdescription,ptechnologies,pclient,pgroupmode,prole, p.uid  ";   
                    }
                    if ($stmt3->rowCount() >= 1){
                        $sql.= " ,programing, networking,webapplication,business,professional, s.uid  ";   
                    }
                     $sql.= " FROM login_users ";
                    if ($stmt2->rowCount() >= 1){
                     $sql.= " , projects p ";    
                    }
                     if ($stmt2->rowCount() >= 1){
                        $sql.= " , skills s ";      
                     }
                     $sql.= " WHERE `user_id` = :user_id ";
                     
                     
                   if ($stmt2->rowCount() >= 1){
                     $sql.= " AND s.uid = :user_id ";
                   }
                    if ($stmt2->rowCount() >= 1){
                        
                    }
                    
                    $stmt   = parent::query($sql, $params);
                    
//                     $stmt   = parent::query("SELECT `user_id`, `username`, `user_level`,`name`, `lname`, `email`, pname,pdescription,ptechnologies,pclient,pgroupmode,prole, 
//                                         programing, networking,webapplication,business,professional
//                                         FROM `login_users`, `projects`, `skills`
//                                         WHERE `user_id` = :user_id;", $params);
                    
                }else{
                    
                    $stmt   = parent::query("SELECT `user_id`, `username`, `user_level`,`name`, `lname`, dob, sex, description, `email`, `image`, qualification, position, field, type, city
                                         FROM `login_users`
                                         WHERE `user_id` = :user_id;", $params);
                    
                }
               
		if ( $stmt->rowCount() < 1 ) {
			$this->error = sprintf('<div class="alert alert-warning">%s</div>', _('Sorry, that user does not exist.') );
			parent::displayMessage($this->error, true);
			return false;
		}

		foreach ($stmt->fetch(PDO::FETCH_ASSOC) as $field => $value) :
			$this->settings[$field] = parent::secure($value);
		endforeach;

	}

	// Return a form field
	public function getField($field) {

		if (!empty($this->settings[$field]))
			return $this->settings[$field];

	}

	// Validate form inputs
	private function validate() {

		if(empty($this->settings['CurrentPass'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter the current password to make changes.').'</div>';
			return false;
		}

		$params = array( ':username' => $this->username );
		$sql = "SELECT `password` FROM `login_users` WHERE `username` = :username;";
		$stmt = parent::query( $sql, $params );
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if ( !parent::validatePassword($this->settings['CurrentPass'], $row['password']) ) {
			$this->error = '<div class="alert alert-error bg-danger">'._('You entered the wrong current password.').'</div>';
			return false;
		}

		if (empty($this->settings['name']))
				$this->error .= '<div class="alert alert-error">'._('You must enter a name.').'</div>';

		if (!parent::isEmail($this->settings['email']))
				$this->error .= '<div class="alert alert-error">'._('You have entered an invalid e-mail address, try again.').'</div>';

		if (!empty($this->settings['password'])) {

			if ($this->settings['password'] != $this->settings['confirm'])
				$this->error .= '<div class="alert alert-error">'._('Your passwords did not match.').'</div>';

			if (strlen($this->settings['password']) < 5)
				$this->error = '<div class="alert alert-error">'._('Your password must be at least 5 characters.').'</div>';

		}

		// Checkbox handling
		$sql = "SELECT * FROM `login_profile_fields`;";
		$stmt = parent::query($sql);

		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
			$name = 'p-' . $row['id'];
			if($row['type'] == 'checkbox')
				$this->settings[$name] = !empty($this->settings[$name]) ? 1 :0;
		endwhile;

	}

	/** @todo: This is extremely ugly, needs refractored. */
	private function updateEmailorPw() {

		$params = array( ':key' => $this->key );
		$sql = "SELECT * FROM `login_confirm` WHERE `key` = :key AND `type` = 'update_emailPw';";
		$stmt = parent::query($sql, $params);

		if ($stmt->rowCount() < 1) {
			$this->error = "<div class='alert alert-error'>Incorrect confirmation link</div>";
			return false;
		}

		$row = $stmt->fetch();

		if ( !empty($row['data']) ) :
			$params = array(
				':password' => $row['data'],
				':email'    => $row['email'],
				':username' => $this->username
			);
			$sql = "UPDATE `login_users` SET `password` = :password, `email` = :email WHERE `username` = :username;";
		else :
			$params = array(
				':email'    => $row['email'],
				':username' => $this->username
			);
			$sql = "UPDATE `login_users` SET `email` = :email WHERE `username` = :username;";
		endif;

		parent::query($sql, $params);

		$params = array( ':key' => $this->key );
		parent::query("DELETE FROM `login_confirm` WHERE `key` = :key AND `type` = 'update_emailPw'", $params);

		if(!empty($_SESSION['pickme']['forcePwUpdate'])) unset($_SESSION['pickme']['forcePwUpdate']);

		$this->error = "<div class='alert alert-success'>Account details successfully changed.</div>";

		$shortcodes = array (
			'site_address'  =>  SITE_PATH,
			'full_name'     =>  $this->settings['name'],
			'username'      =>  $this->username
		);

		$subj = parent::getOption('email-acct-update-success-subj');
		$msg  = parent::getOption('email-acct-update-success-msg');

		// Send an email with key
		if ( !parent::sendEmail($row['email'], $subj, $msg, $shortcodes) )
			$this->error = '<div class="alert alert-error">'._('ERROR. Mail not sent').'</div>';

	}

	private function process() {
               
                   
		$params = array (
			':name'     => $this->settings['name'],
                        ':lname'     => $this->settings['lname'],
                        ':mobile'     => $this->settings['mobile'],
			':username' => $this->username
		);
		parent::query("UPDATE `login_users` SET `name` = :name, `lname`= :lname, `mobile`= :mobile WHERE `username` = :username", $params);
                $time = time();
            $uploaddir = '/var/www/html/pickme/uploads/'; 
                #profile image handling
                if($_FILES['pimage']['name']) {
           
            $extimg = pathinfo($_FILES['pimage']['name'], PATHINFO_EXTENSION);
            $allowedimg = array('gif', 'png', 'jpg');
            $uniname = $time . '_' . $this->settings['user_id'] . '.' . $extimg;
            $uploadimagefile = $uploaddir . 'images/' . $uniname;

            if (in_array($extimg, $allowedimg)) {
                if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $uploadimagefile)) {
                    // echo "File is valid, and was successfully uploaded.\n";
                    $params = array(
                        ':image' => $uniname,
                        ':username' => $this->username
                    );
                    parent::query("UPDATE `login_users` SET `image`=:image WHERE `username` = :username", $params);
                } else {
                    
                }
            } else {
                $this->error = "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert'>&times;</a>" . _('Please upload GIF, JPG or PNG images for the profile picture') . ".</div>";
            }
        }

        #students editing
                
         if (protectThis(3)) {

            $params = array (			
                        ':dob'     => $this->settings['dob'],
                        ':sex'     => $this->settings['sex'],
                        ':username' => $this->username
		);
            parent::query("UPDATE `login_users` SET  `dob`= :dob, `sex`= :sex WHERE `username` = :username", $params);
            
            #transcript handling
            if($_FILES['transcript']['name']) {
            $exttr = pathinfo($_FILES['transcript']['name'], PATHINFO_EXTENSION);
            $allowedtra = array('pdf', 'doc', 'docx');
            $uniname = $time . '_' . $this->settings['user_id'] . '.' . $exttr;
            $uploadtrafile = $uploaddir . 'transcripts/' . $uniname;

            if (in_array($exttr, $allowedtra)) {
                if (move_uploaded_file($_FILES["transcript"]["tmp_name"], $uploadtrafile)) {
                    // echo "File is valid, and was successfully uploaded.\n";
                    $params = array(
                        ':transcript' => $uniname,
                        ':uid' => $this->settings['user_id']
                    );
                    parent::query("UPDATE `skills` SET `transcript`=:transcript WHERE `uid` = :uid", $params);
                } else {
                    
                }
            } else {
                $this->error = "<div class='alert alert-warning'> <a href='#' class='close' data-dismiss='alert'>&times;</a>" . _('Please upload PDF, DOC, DOCX fils for transcript.') . ".</div>";
            }
             }
            #cv handling
            
            if($_FILES['cv']['name']) {
            $extcv = pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION);
            $allowedcv = array('pdf', 'doc', 'docx');
            $uniname = $time . '_' . $this->settings['user_id'] . '.' . $extcv;
            $uploadtrafile = $uploaddir . 'cvs/' . $uniname;

            if (in_array($extcv, $allowedcv)) {
                if (move_uploaded_file($_FILES["cv"]["tmp_name"], $uploadtrafile)) {
                    // echo "File is valid, and was successfully uploaded.\n";
                    $params = array(
                        ':cv' => $uniname,
                        ':uid' => $this->settings['user_id']
                    );
                    parent::query("UPDATE `skills` SET `cv`=:cv WHERE `uid` = :uid", $params);
                } else {
                    
                }
            } else {
                $this->error = "<div class='alert alert-warning'> <a href='#' class='close' data-dismiss='alert'>&times;</a>" . _('Please upload PDF, DOC, DOCX fils for transcript.') . ".</div>";
            }

            }

            $params = array(':uid' => $this->settings['user_id']);
            $sql = "SELECT * FROM `skills` WHERE `uid` = :uid;";
            $stmt1 = parent::query($sql, $params);

            $params2 = array(
                ':uid' => $this->user_id,
                ':programing' => (is_array($this->settings['programing'])) ? base64_encode(serialize($this->settings['programing'])) : "",
                ':networking' => (is_array($this->settings['networking'])) ? base64_encode(serialize($this->settings['networking'])) : "",
                ':webapplication' => (is_array($this->settings['webapplication'])) ? base64_encode(serialize($this->settings['webapplication'])) : "",
                ':business' => (is_array($this->settings['business'])) ? base64_encode(serialize($this->settings['business'])) : "",
                ':professional' => (is_array($this->settings['professional'])) ? base64_encode(serialize($this->settings['professional'])) : ""
            );
            //echo '<pre>';print_r(serialize($this->settings['programing'])); print_r( unserialize('a:4:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"5";}'));die;
            if ($stmt1->rowCount() >= 1) {
                $sql2 = "UPDATE `skills` SET `programing` = :programing, `networking`= :networking, `webapplication`=:webapplication, `business`= :business, `professional`=:professional  WHERE `uid` = :uid;";
                parent::query($sql2, $params2);
            } else {
                $sql2 = "INSERT INTO `skills` (`uid`, `programing`, `networking`, `webapplication`, `business`, `professional`)
				VALUES (:uid, :programing, :networking, :webapplication, :business, :professional);";
                parent::query($sql2, $params2);
            }


            $params = array(':uid' => $this->settings['user_id']);
            $sql = "SELECT * FROM `projects` WHERE `uid` = :uid;";
            $stmt2 = parent::query($sql, $params);

            $params3 = array(
                ':uid' => $this->user_id,
                ':pname' => $this->settings['pname'],
                ':pdescription' => $this->settings['pdescription'],
                ':ptechnologies' => $this->settings['ptechnologies'],
                ':pclient' => $this->settings['pclient'],
                ':pgroupmode' => $this->settings['pgroupmode'],
                ':prole' => $this->settings['prole']
            );
            // echo '<pre>';print_r($this); print_r( unserialize('a:4:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"5";}'));die;
            if ($stmt2->rowCount() >= 1) {
                $sql3 = "UPDATE `projects` SET `pname` = :pname, `pdescription`= :pdescription, `ptechnologies`=:ptechnologies, `pclient`= :pclient, `pgroupmode`=:pgroupmode, `prole`=:prole  WHERE `uid` = :uid;";
                parent::query($sql3, $params3);
            } else {
                $sql3 = "INSERT INTO `projects` (`uid`, `pname`, `pdescription`, `ptechnologies`, `pclient`, `pgroupmode`, `prole`)
				VALUES (:uid, :pname, :pdescription, :ptechnologies, :pclient, :pgroupmode, :prole);";
                parent::query($sql3, $params3);
            }
        }
        
         if(protectThis(4)){ //print_r($this->settings['type']);
             $params = array (
			':field' => (is_array($this->settings['field'])) ? base64_encode(serialize($this->settings['field'])) : "",
                        ':type'     => $this->settings['type'],
                        ':city'     => $this->settings['city'],
                        ':dob'     => $this->settings['dob'],
                        ':description'     => $this->settings['description'],
                        ':username' => $this->username
		);
		parent::query("UPDATE `login_users` SET `field` = :field, `type`= :type, `city`= :city, `dob`= :dob,`description`= :description WHERE `username` = :username", $params);
         }
         
         if(protectThis(2)){
            $params = array (
			':qualification' => (is_array($this->settings['qualification'])) ? base64_encode(serialize($this->settings['qualification'])) : "",
                        ':field'     => (is_array($this->settings['field'])) ? base64_encode(serialize($this->settings['field'])) : "",
                        ':dob'     => $this->settings['dob'],
                        ':sex'     => $this->settings['sex'],
                        ':username' => $this->username
		);
		parent::query("UPDATE `login_users` SET `qualification` = :qualification, `field`= :field, `dob`= :dob, `sex`= :sex WHERE `username` = :username", $params); 
         }

        $this->error .= "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert'>&times;</a>"._('User information updated for')." <b>".$this->settings['name']."</b> ($this->username).</div>";

		$params = array( ':username' => $this->username );
		$stmt = parent::query("SELECT `email` FROM `login_users` WHERE `username` = :username;", $params);
		$email = $stmt->fetch();
		$email = $email[0];

		if ( !empty($this->settings['password']) || $this->settings['email'] != $email ) :

			$key = md5(uniqid(mt_rand(),true));
			$params = array(
				':username' => $this->username,
				':key'      => $key,
				':email'    => $this->settings['email'],
				':type'     => 'update_emailPw',
				':data'     => empty($this->settings['password']) ? '' : parent::hashPassword($this->settings['password'])
			);
			$sql = "INSERT INTO `login_confirm` (`username`, `key`, `email`, `type`, `data`)
					VALUES (:username, :key, :email, :type, :data);";
			parent::query($sql, $params);

			$shortcodes = array(
				'site_address'  =>  SITE_PATH,
				'full_name'     =>  $this->settings['name'],
				'username'      =>  $this->username,
				'confirm'       =>  SITE_PATH . "profile.php?key=$key"
			);

			$subj = parent::getOption('email-acct-update-subj');
			$msg  = parent::getOption('email-acct-update-msg');

			// Send an email with key
			if(!parent::sendEmail($email, $subj, $msg, $shortcodes))
				$this->error = '<div class="alert alert-error">'._('ERROR. Mail not sent').'</div>';
			else
				$this->error = "<div class='alert alert-warning'>" . _('Check your email to confirm this change.') . '</div>';

		endif;

		// Update profile fields
		foreach($this->settings as $field => $value) :
			if(strstr($field,'p-')) {
				$field = str_replace('p-', '', $field);
				parent::updateOption($field, $value, true, $this->settings['user_id']);
			}
		endforeach;

	}
        
       
        
}

$profile = new Profile();