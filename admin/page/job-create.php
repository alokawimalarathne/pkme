<?php include_once('admin.php'); ?>
<?php include_once(dirname(dirname(__FILE__)) . '/classes/add_job.class.php'); ?>

	<form method="post" class="form form-horizontal" id="job-add-form" action="page/job-create.php">
		<div id="job-message"></div>
		<fieldset>
			<div class="control-group">
				<label class="control-label" for="name"><?php _e('Name'); ?></label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="name" name="name" value="<?php //echo $addLevel->getPost('name'); ?>">
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label" for="description"><?php _e('Content'); ?></label>
				<div class="controls">
					<textarea class="form-control" id="description" name="description" rows="8" autocomplete="off"> </textarea>
				</div>
			</div>
                         <div class="control-group">
				<label class="control-label" for="salary"><?php _e('Salary (Mention with currency)'); ?></label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="salary" name="salary" value="<?php //echo $addLevel->getPost('name'); ?>">
				</div>
			</div>
                         <div class="control-group">
				<label class="control-label" for="city"><?php _e('City'); ?></label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="city" name="city" value="<?php //echo $addLevell->getPost('name'); ?>">
				</div>
			</div>
                    
                    <div class="control-group">
				<label class="control-label" for="experience"><?php _e('Experience (in Years)'); ?></label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="city" name="experience" value="<?php //echo $addLevel->getPost('name'); ?>">
				</div>
			</div>
                   
                     <div class="control-group">
				<label class="control-label" for="period"><?php _e('Period'); ?></label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="period" name="period" value="<?php //echo $addLevel->getPost('name'); ?>">
				</div>
			</div>
                    <div class="control-group">
				<label class="control-label" for="email"><?php _e('E-mail'); ?></label>
				<div class="controls">
					<input type="email" class="input-xlarge" id="email" name="email" value="<?php //echo $addLevel->getPost('name'); ?>">
				</div>
			</div>
                     <div class="control-group">
				<label class="control-label" for="mobile"><?php _e('Mobile/Telephone'); ?></label>
				<div class="controls">
					<input type="tel" class="input-xlarge" id="mobile" name="mobile" value="<?php //echo $addLevel->getPost('name'); ?>">
				</div>
			</div>
			
			
                        <div class="control-group">
				<label class="control-label" for="published"><?php _e('Publish'); ?></label>
                                <div class="controls">
				<label class="checkbox-inline">
                                    <input type="radio" id="publishedyes" value="1" name='published'> Yes
                                  </label>
                                  <label class="checkbox-inline">
                                    <input type="radio" id="publishedno" value="0" name='published'> No
                                </label>
                                </div>
			</div>
		 <div class="control-group">
                     <div class="controls">
                         
			<button type="submit" name="add_job" class="btn btn-primary buttonsubmit" id="job-add-submit"><?php _e('Create job'); ?></button>
                     </div>
		</div>
		</fieldset>
	</form>


<script>
$(document).ready(function() {
/** Create level form */
$("#job-add-form").validate({

	/** admin add level form */
	submitHandler: function() {

		$('#job-add-submit').button('loading');

		var post = $('#job-add-form').serialize();
		var action = $("#job-add-form").attr('action');

		$("#job-message").slideUp(350, function () {

			$('#job-message').hide();

			$.post(action, post, function (data) {

				$('#job-message').html(data);

				document.getElementById('job-message').innerHTML = data;
				$('#job-message').slideDown('slow');
				if (data.match('success') !== null) {
					$('#job-add-form input').val('');
					$('#job-add-submit').button('reset');
				} else {
					$('#job-add-submit').button('reset');
				}
			});
		});
	},
	rules: {
		level: "required",
		auth: {
			required: true,
			remote: {
				url: "classes/add_job.class.php",
				type: "post",
				data: { checklevel: "1" }
			}
		}
	},
	messages: {
		name: {
			required: "This needs to be filled out.",
			//remote: jQuery.format("Username has been taken.")
		},
		category: {
			required: "A category is required.",
			//remote: jQuery.format("Auth level in use.")
		},
                content: {
			required: "Content is required.",
			//  remote: jQuery.format("Auth level in use.")
		}
	},
	errorClass: 'error',
	validClass: 'success',
	errorElement: 'p',
	highlight: function(element, errorClass, validClass) {
		$(element).parent('div').parent('div').removeClass(validClass).addClass(errorClass);
	},
	unhighlight: function(element, errorClass, validClass) {
		$(element).parent('div').parent('div').removeClass(errorClass).addClass(validClass);
	},
});
});
</script>