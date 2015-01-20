<?php 
include_once('admin.php'); 
include_once(dirname(dirname(dirname(__FILE__))) . '/classes/translate.class.php');
?>

<fieldset>
	<legend><?php _e('Manage skills'); ?>

		<form method="post" id="search-levels-form" class="pull-right" action="classes/add_skill.class.php">
			<div class="control-group">
			  <div class="controls">
				<div class="input-prepend">
				  <button id="create_new_skill_btn" class="btn btn-small"><?php _e('Create new skill'); ?></button>
				  <input type="number" class="input-mini" min="0" id="showskills" name="showskills" placeholder="<?php _e('Show'); ?>" value="<?php echo !empty($_SESSION['pickme']['levels_page_limit']) ? $_SESSION['pickme']['levels_page_limit'] : 10; ?>">
				  <span class="add-on">
				    <label for="skillSearch"><a href="#" data-rel="tooltip-bottom" title="<?php _e('Search by Name, Category, ID'); ?>"><i class="icon-search"></i></a></label>
				  </span>
				  <input style="margin:0;" class="span2" type="text" placeholder="<?php _e('Skill search'); ?>" onkeyup="searchSuggest(event);" name="searchArticles" id="searchArticles">
				</div>
			  </div>
			</div>
		</form>
	</legend>

	<div id="create_skill" class="hide-adduser">
		<?php include_once('skill_create.php'); ?>
	</div>

	<?php skills(); ?>
</fieldset>

<script>
$('#create_new_skill_btn').click(function(e) { 
	e.preventDefault();
	$('#create_skill').slideToggle();

});

$('#showskills').blur(function() {
	$.post('classes/functions.php', {'showLevels' : $(this).val()});

	/* Little hack to refresh the page silently... */
	$('a[href="#skills"]').tab('show');
	$('a[href="#level-control"]').tab('show');
});
</script>