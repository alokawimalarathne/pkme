<?php
include_once( dirname(dirname(__FILE__)) . '/classes/check.class.php');
protect("1");

include_once('header.php');

?>
<div class="row">

		<form method="post" class="form form-horizontal" id="article-add-form" action="">
                    <?php include_once('classes/edit_article.class.php');  ?>
		<div id="article-message"></div>
		<fieldset>
			<div class="control-group">
				<label class="control-label" for="name"><?php _e('Name'); ?></label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="name" name="name" value="<?php echo $Edit_article->getValue('name'); ?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="category"><?php _e('Category'); ?></label>
				<div class="controls">
                                    <select class="selectpicker" name="category">
                                            <option value='news' <?php if($Edit_article->getValue('category')=='news'){ echo "selected"; } ?>>News</option>
                                            <option value='resources' <?php if($Edit_article->getValue('category')=='resources'){ echo "selected"; } ?>>Resources</option>
                                            
                                        </select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="content"><?php _e('Content'); ?></label>
				<div class="controls">
					<textarea class="form-control" id="article-content" name="content" rows="10" autocomplete="off"><?php echo $Edit_article->getValue('content'); ?></textarea>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label" for="published"><?php _e('Publish'); ?></label>
                                <div class="controls">
				<label class="checkbox-inline">
                                    <input type="checkbox" id="publishedyes" <?php if($Edit_article->getValue('published')==1){ echo "checked"; } ?> value="1" name='published'> Yes
                                  </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="publishedno" value="0" <?php if($Edit_article->getValue('published')==0){ echo "checked"; } ?> name='published'> No
                                </label>
                                </div>
			</div>
                    
                    <div class="control-group">
				<label class="control-label"><?php _e('Delete'); ?></label>
				<div class="controls">
					<label class="checkbox-inline">
					<input id="delete" name="delete" type="checkbox" />
					<?php _e('Remove this article from the database'); ?>
					</label>
				</div>
			</div>
                    
                    
		 <div class="control-group">
                     <div class="controls">
                         
			<button type="submit" name="do_edit" class="btn btn-primary"><?php _e('Update'); ?></button>
                     </div>
		</div>
                    
                    
		</fieldset>
	</form>

</div>



<?php include_once('footer.php'); ?>