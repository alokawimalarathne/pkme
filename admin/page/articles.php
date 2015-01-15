<?php 
include_once('admin.php'); 
include_once(dirname(dirname(dirname(__FILE__))) . '/classes/translate.class.php');
?>

<fieldset>
	<legend><?php _e('Manage Articles'); ?>

		<form method="post" id="search-levels-form" class="pull-right" action="classes/add_article.class.php">
			<div class="control-group">
			  <div class="controls">
				<div class="input-prepend">
				  <button id="create_new_level_btn" class="btn btn-small"><?php _e('Create new article'); ?></button>
				  <input type="number" class="input-mini" min="0" id="showLevels" name="showArticles" placeholder="<?php _e('Show'); ?>" value="<?php echo !empty($_SESSION['pickme']['levels_page_limit']) ? $_SESSION['pickme']['levels_page_limit'] : 10; ?>">
				  <span class="add-on">
				    <label for="articleSearch"><a href="#" data-rel="tooltip-bottom" title="<?php _e('Search by Name, ID, or Date.'); ?>"><i class="icon-search"></i></a></label>
				  </span>
				  <input style="margin:0;" class="span2" type="text" placeholder="<?php _e('Article search'); ?>" onkeyup="searchSuggest(event);" name="searchArticles" id="searchArticles">
				</div>
			  </div>
			</div>
		</form>
	</legend>

	<div id="create_level" class="hide">
		<?php include_once('level-create.php'); ?>
	</div>

	<?php user_levels(); ?>
</fieldset>

<script>
$('#create_new_level_btn').click(function(e) {

	e.preventDefault();
	$('#create_level').slideToggle();

});

$('#showLevels').blur(function() {
	$.post('classes/functions.php', {'showLevels' : $(this).val()});

	/* Little hack to refresh the page silently... */
	$('a[href="#user-control"]').tab('show');
	$('a[href="#level-control"]').tab('show');
});
</script>