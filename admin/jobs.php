<?php
include_once( dirname(dirname(__FILE__)) . '/classes/check.class.php');
protect("1");

include_once('header.php');

?>
<div class="row">

		<form method="post" class="form form-horizontal" id="job-add-form" action="">
                    <?php include_once('classes/edit_job.class.php');  ?>
		<div id="job-message"></div>
		<fieldset>
			<div class="control-group">
				<label class="control-label" for="name"><?php _e('Name'); ?></label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="name" name="name" value="<?php echo $Edit_job->getValue('name'); ?>">
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label" for="description"><?php _e('Content'); ?></label>
				<div class="controls">
					<textarea class="form-control" id="description" name="description" rows="8" autocomplete="off"><?php echo $Edit_job->getValue('description'); ?> </textarea>
				</div>
			</div>
                         <div class="control-group">
				<label class="control-label" for="salary"><?php _e('Salary (Mention with currency)'); ?></label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="salary" name="salary" value="<?php echo $Edit_job->getValue('salary'); ?>">
				</div>
			</div>
                         <div class="control-group">
				<label class="control-label" for="city"><?php _e('City'); ?></label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="city" name="city" value="<?php echo $Edit_job->getValue('city'); ?>">
				</div>
			</div>
                    
                    <div class="control-group">
				<label class="control-label" for="experience"><?php _e('Experience (in Years)'); ?></label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="city" name="experience" value="<?php echo $Edit_job->getValue('experience'); ?>">
				</div>
			</div>
                   
                     <div class="control-group">
				<label class="control-label" for="period"><?php _e('Period'); ?></label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="period" name="period" value="<?php echo $Edit_job->getValue('period'); ?>">
				</div>
			</div>
                    <div class="control-group">
				<label class="control-label" for="email"><?php _e('E-mail'); ?></label>
				<div class="controls">
					<input type="email" class="input-xlarge" id="email" name="email" value="<?php echo $Edit_job->getValue('email'); ?>">
				</div>
			</div>
                     <div class="control-group">
				<label class="control-label" for="mobile"><?php _e('Mobile/Telephone'); ?></label>
				<div class="controls">
					<input type="tel" class="input-xlarge" id="mobile" name="mobile" value="<?php echo $Edit_job->getValue('mobile'); ?>">
				</div>
			</div>
			
			
                        <div class="control-group">
				<label class="control-label" for="published"><?php _e('Publish'); ?></label>
                                <div class="controls">
				<label class="checkbox-inline">
                                    <input type="checkbox" id="publishedyes" <?php if($Edit_job->getValue('published')==1){ echo "checked"; } ?> value="1" name='published'> Yes
                                  </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="publishedno" <?php if($Edit_job->getValue('published')==1){ echo "checked"; } ?> value="0" name='published'> No
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
<!--<script>
$('#delete').click(function(e) {

	e.preventDefault();
	confirm('Please click OK to delete this article');
        return true;

});
</script>-->


<?php include_once('footer.php'); ?>