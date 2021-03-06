<?php
include_once('../classes/generic.class.php');

class Edit_job extends Generic {

	public $error;
	public $results;

	public $search_q;
	public $options = array();

	

	function __construct() {

		// Save level and auth
		if(!empty($_GET['id']))
			$this->retrieveInfo();

		if(isset($_POST['do_edit'])) :

			foreach ($_POST as $key => $value)
				$this->options[$key] = parent::secure($value);

			//$this->options['level_disabled'] = !empty($_POST['disable']) ? 'checked' : '';
			//$this->options['welcome_email'] =  !empty($_POST['welcome_email']) ? 'checked' : '';

			// Validate fields
			$this->validate();

		endif;

		if(!empty($this->error))
			parent::displayMessage("<div class='alert alert-warning'>$this->error</div>", false);

		if(!empty($this->result))
			parent::displayMessage("<div class='alert alert-success'>$this->result</div>", false);

	}

	public function getValue($name) {

		if(!empty($this->options[$name]))
			return $this->options[$name];

	}

	private function retrieveInfo() { 

		$this->options['id'] = (int) $_GET['id'];

		$params = array( ':id' => $this->options['id'] );
		$stmt   = parent::query("SELECT * FROM `jobs` WHERE `id` = :id;", $params);

		if ($stmt->rowCount() < 1) :
			$this->error = _("Job doesn't exist!");
			return false;
		endif;

		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :

			foreach ($row as $key => $value)
				$this->options[$key] = $value;

		endwhile;
		
                
		//$this->options['level_level2'] = $this->options['level_level'];
		//$this->options['level_disabled'] = !empty($this->options['level_disabled']) ? 'checked' : '';
		//$this->options['welcome_email'] =  !empty($this->options['welcome_email'])  ? 'checked' : '';

//		if ($this->options['level_level'] == 1 || $this->options['level_level2'] == 1 || $this->options['level_id'] == 1) {
//			$this->isAdmin = true;
//		}

	}

	private function validate() { 

		if(!empty($this->options['delete'])) {
			$this->process(true);
			return false;
		}

		if(empty($this->options['name'])) {
			$this->error = _('You must enter a job name.');
			return false;
		}
                if(empty($this->options['description'])) {
			$this->error = _('You must enter a description.');
			return false;
		}
//		if (empty($this->options['content'])) {
//			$this->error = _('You must enter an content.');
//			return false;
//		}

		$params = array( ':name' => $this->options['name'] );
		$stmt   = parent::query("SELECT * FROM `jobs` WHERE `name` = :name;", $params);

//		if( $stmt->rowCount() > 0 && $this->options['name'] != $this->options['level_level2'] )
//			$this->error = sprintf(_('Auth level %s already exists'), $this->options['level_level']);

		// Process form
		if(empty($this->error))
			$this->process();

	}

	private function process($delete = false) {

		if ( !empty($this->error) )
			return false;

		if ($delete) :

//			$params = array( ':level' => '%:"' . $this->options['level_id'] . '";%' );
//			$stmt   = parent::query("SELECT COUNT(user_level) FROM login_users WHERE user_level LIKE :level;", $params);
//
//			$result = $stmt->fetch();
//
//			if ($result[0] > 0) :
//				$this->error = _("This level still has users in it!");
//				return false;
//			endif;

			$params = array( ':id' => $this->options['id'] );
			$stmt = parent::query("DELETE FROM `jobs` WHERE `id` = :id;", $params);
			$this->result = sprintf(_('Job <b>%s</b> removed from database.'), $this->options['name']);
                        header('location: index.php#/jobs');

		else :

			$params = array(
				':name'     => $this->options['name'],
				':description'    => $this->options['description'],
				':salary' =>   $this->options['salary'],
				':city' => $this->options['city'],
                                ':experience' => $this->options['experience'],
                                ':period' => $this->options['period'],
                                ':email' => $this->options['email'],
                                ':mobile' => $this->options['mobile'],
				':date' => time(),
				':published' => $this->options['published']
			);

			$stmt = parent::query("UPDATE jobs SET name = :name, description = :description, salary = :salary, city = :city, 
                                `experience` = :experience, `period` = :period,`email` = :email,`mobile` = :mobile,`published` = :published WHERE id = :id;", $params);
			$this->result = sprintf(_('Information updated for job <b>%s</b>.'), $this->options['name']);

		endif;

	}

}

$Edit_job = new Edit_job;