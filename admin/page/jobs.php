<?php 
include_once('admin.php'); 
include_once(dirname(dirname(dirname(__FILE__))) . '/classes/translate.class.php');
?>

<fieldset>
	<legend><?php _e('Manage Jobs'); ?>

		<form method="post" id="search-jobs-form" class="pull-right" action="classes/add_job.class.php">
			<div class="control-group">
			  <div class="controls">
				<div class="input-prepend">
				  <button id="create_new_job_btn" class="btn btn-small"><?php _e('Create new job'); ?></button>
				  <input type="number" class="input-mini" min="0" id="showjobs" name="showjobs" placeholder="<?php _e('Show'); ?>" value="<?php echo !empty($_SESSION['pickme']['levels_page_limit']) ? $_SESSION['pickme']['levels_page_limit'] : 10; ?>">
				  <span class="add-on">
				    <label for="jobSearch"><a href="#" data-rel="tooltip-bottom" title="<?php _e('Search by Name, ID, or Date.'); ?>"><i class="icon-search"></i></a></label>
				  </span>
				  <input style="margin:0;" class="span2" type="text" placeholder="<?php _e('Job search'); ?>" onkeyup="searchSuggest(event);" name="searchjobs" id="searchjobs">
				</div>
			  </div>
			</div>
		</form>
	</legend>

	<div id="create_job" class="hide-adduser">
		<?php include_once('job-create.php'); ?>
	</div>

	<?php jobs(); ?>
</fieldset>

<script>
$('#create_new_job_btn').click(function(e) { 
	e.preventDefault();
	$('#create_job').slideToggle();

});

$('#showLevels').blur(function() {
	$.post('classes/functions.php', {'showLevels' : $(this).val()});

	/* Little hack to refresh the page silently... */
	$('a[href="#user-control"]').tab('show');
	$('a[href="#level-control"]').tab('show');
});
</script>