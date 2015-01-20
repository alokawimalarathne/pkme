<?php

include_once(dirname(dirname(dirname(__FILE__))) . '/classes/generic.class.php');

class Add_job extends Generic {

    private $error;
    private $name;
    private $description;
    private $salary;
    private $city;
    private $period;
    private $email;
    private $mobile;
    private $published;
    private $experience;

    function __construct() {

		// jQuery form validation
		parent::checkExists();

		if(isset($_POST['searchArticles'])) {
			$this->searchjobs();
			exit();
		}

		if(isset($_POST['add_job'])) {
			
			$this->name = parent::secure($_POST['name']);
                        $this->description = parent::secure($_POST['description']);
                        $this->salary = parent::secure($_POST['salary']);
                        $this->city = parent::secure($_POST['city']);
                        $this->period = parent::secure($_POST['period']);
                        $this->email = parent::secure($_POST['email']);
                        $this->mobile = parent::secure($_POST['mobile']);
                        $this->published = parent::secure($_POST['published']);
                         $this->experience = parent::secure($_POST['experience']);
                        
                       

			// Confirm all details are correct
			$this->verify();

			// Create the level
			$this->addjob();

		}

	}

	/** @todo: Should be in a different class, not add_user. */
	private function searchjobs() {

		if(empty($_POST['searchjobs'])) return false;

		$params = array(
			':searchQ'  => $_POST['searchjobs'] . '%',
			':searchQ2' => '%' . $_POST['searchjobs'] . '%'
		);
		$sql = "SELECT name as suggest, id
				FROM jobs
				WHERE name LIKE :searchQ
				OR content LIKE :searchQ
				
				ORDER BY name
				LIMIT 0, 5";

		$stmt = parent::query($sql, $params);

		if ( $stmt->rowCount() < 1 ) {
			echo '<h3>' . _('No suggestions') . '</h3>
				  <p class="help-block">' . _('Try searching by name, content.') . '</p>';
			return false;
		}

		echo '<h2>' . _('Suggestions') . '</h2>';

		while($suggest = $stmt->fetch(PDO::FETCH_ASSOC))
			echo "<p><a href='jobs.php?lid=" . $suggest['id'] . "'>" . $suggest['suggest'] . "</a></p>\n";

	}

	// Return a value if it exists
	public function getPost($var) {

		if(!empty($this->$var)) {
			return $this->$var;
		} else return false;

	}

	private function verify() {

		if(empty($this->name)) {
			$this->error = '<div class="alert alert-error">'._('You must enter a name.').'</div>';
			return false;
		}
                if(empty($this->description)) {
			$this->error = '<div class="alert alert-error">'._('You must enter a description.').'</div>';
			return false;
		}
                
                if(empty($this->published)) {
			$this->error = '<div class="alert alert-error">'._('You must enter a published.').'</div>';
			return false;
		}


	}

	private function addjob() {
                $date = time();
		if(isset($_POST['add_job']) && empty($this->error)) {



			$params = array(
                            ':name' => $this->name,
                            ':description' => $this->description,
                            ':salary' => $this->salary,
                            ':city' => $this->city,
                            ':experience' => $this->experience,
                            ':period' => $this->period,
                            ':email' => $this->email,
                            ':mobile' => $this->mobile,
                            ':date' => time(),
                            ':published' => $this->published
                        );

            parent::query("INSERT INTO `jobs` (`name`, `description`, `salary`,`city`,`experience`,`period`,`email`,`mobile`,`date`, `published`)
						   VALUES (:name, :description, :salary, :city,:experience,:period,:email,:mobile,:date, :published)", $params);

			$this->error = 	"<div class='alert alert-success'>" . sprintf(_('Successfully added job <b>%s</b> to the database.'), $this->name) . "</div>";

			$this->level = '';
			$this->auth = '';

		}

		echo $this->error;
		exit();

	}

}

$addJob = new Add_job();