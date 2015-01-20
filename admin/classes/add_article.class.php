<?php

include_once(dirname(dirname(dirname(__FILE__))) . '/classes/generic.class.php');

class Add_article extends Generic {

	private $error;

	
	private $name;
        private $category;
        private $content;
        private $date;
        private $published;
        
        
	function __construct() {

		// jQuery form validation
		parent::checkExists();

		if(isset($_POST['searchArticles'])) {
			$this->searchArticles();
			exit();
		}

		if(isset($_POST['add_article'])) {
			
			$this->name = parent::secure($_POST['name']);
                        $this->category = parent::secure($_POST['category']);
                        $this->content = parent::secure($_POST['content']);
                        $this->published = parent::secure($_POST['published']);

			// Confirm all details are correct
			$this->verify();

			// Create the level
			$this->addarticle();

		}

	}

	/** @todo: Should be in a different class, not add_user. */
	private function searchArticles() {

		if(empty($_POST['searchArticles'])) return false;

		$params = array(
			':searchQ'  => $_POST['searchArticles'] . '%',
			':searchQ2' => '%' . $_POST['searchArticles'] . '%'
		);
		$sql = "SELECT name as suggest, id
				FROM articles
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
			echo "<p><a href='articles.php?lid=" . $suggest['id'] . "'>" . $suggest['suggest'] . "</a></p>\n";

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

//		if(!is_numeric($this->auth)) {
//			$this->error = '<div class="alert alert-error">'._('Auth level has to be a number.').'</div>';
//			return false;
//		}

	}

	private function addarticle() {
                $date = time();
		if(isset($_POST['add_article']) && empty($this->error)) {

//			$params = array( ':authLevel' => $this->auth );
//			$stmt   = parent::query("SELECT * FROM `login_levels` WHERE `level_level` = :authLevel", $params);
//
//			if($stmt->rowCount() > 0) {
//				$this->error = '<div class="alert alert-error">'._('Auth level').' <b>'.$this->auth.'</b> '._('already exists').'</b>.</div>';
//				return false;
//			}

			$params = array(
				':name' => $this->name,
				':category' => $this->category,
                                ':content' => $this->content,
                                ':date' => $date,
                                ':published' => $this->published,
                            
			);

			parent::query("INSERT INTO `articles` (`name`, `category`, `content`,`date`, `published`)
						   VALUES (:name, :category, :content, :date, :published)", $params);

			$this->error = 	"<div class='alert alert-success'>" . sprintf(_('Successfully added article <b>%s</b> to the database.'), $this->name) . "</div>";

			$this->level = '';
			$this->auth = '';

		}

		echo $this->error;
		exit();

	}

}

$addLevel = new Add_article();