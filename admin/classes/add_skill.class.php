<?php

include_once(dirname(dirname(dirname(__FILE__))) . '/classes/generic.class.php');

class Add_skill extends Generic {

	private $error;
	private $name;
        private $cat;
        
        
       
        
	function __construct() {

		// jQuery form validation
		parent::checkExists();

		if(isset($_POST['searchskills'])) {
			$this->searchskills();
			exit();
		}

		if(isset($_POST['add_skill'])) {
			
			$this->name = parent::secure($_POST['name']);
                        $this->cat = parent::secure($_POST['cat']);
                        
                        

			// Confirm all details are correct
			$this->verify();

			// Create the level
			$this->addskill();

		}

	}

	/** @todo: Should be in a different class, not add_user. */
	private function searchskill() {

		if(empty($_POST['searchskills'])) return false;

		$params = array(
			':searchQ'  => $_POST['searchskills'] . '%',
			':searchQ2' => '%' . $_POST['searchskills'] . '%'
		);
		$sql = "SELECT name as suggest, id
				FROM skills_list
				WHERE name LIKE :searchQ
				OR name LIKE :searchQ2
				
				ORDER BY name
				LIMIT 0, 5";

		$stmt = parent::query($sql, $params);

		if ( $stmt->rowCount() < 1 ) {
			echo '<h3>' . _('No suggestions') . '</h3>
				  <p class="help-block">' . _('Try searching by name.') . '</p>';
			return false;
		}

		echo '<h2>' . _('Suggestions') . '</h2>';

		while($suggest = $stmt->fetch(PDO::FETCH_ASSOC))
			echo "<p><a href='skills.php?lid=" . $suggest['id'] . "'>" . $suggest['suggest'] . "</a></p>\n";

	}

	// Return a value if it exists
	public function getPost($var) {

		if(!empty($this->$var)) {
			return $this->$var;
		} else return false;

	}

	private function verify() {

		
                if(empty($this->cat)) {
			$this->error = '<div class="alert alert-danger alert-dismissible fade in">'._('You must enter a category.').'</div>';
			return false;
		}
                if(empty($this->name)) {
			$this->error = '<div class="alert alert-danger alert-dismissible fade in">'._('You must enter a name.').'</div>';
			return false;
		}

//		if(!is_numeric($this->auth)) {
//			$this->error = '<div class="alert alert-error">'._('Auth level has to be a number.').'</div>';
//			return false;
//		}

	}

	private function addskill() {
                $date = time();
		if(isset($_POST['add_skill']) && empty($this->error)) {

//			$params = array( ':authLevel' => $this->auth );
//			$stmt   = parent::query("SELECT * FROM `login_levels` WHERE `level_level` = :authLevel", $params);
//
//			if($stmt->rowCount() > 0) {
//				$this->error = '<div class="alert alert-error">'._('Auth level').' <b>'.$this->auth.'</b> '._('already exists').'</b>.</div>';
//				return false;
//			}

			$params = array(
				':name' => $this->name,
				':cat' => $this->cat
                             
			);

			parent::query("INSERT INTO `skills_list` (`name`, `cat`)
						   VALUES (:name, :cat)", $params);

			$this->error = 	"<div class='alert alert-success'>" . sprintf(_('Successfully added skill <b>%s</b> to the database.'), $this->name) . "</div>";

			$this->level = '';
			$this->auth = '';

		}

		echo $this->error;
		exit();

	}

}

$addLevel = new Add_skill();