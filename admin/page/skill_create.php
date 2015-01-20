<?php include_once('admin.php'); ?>
<?php include_once(dirname(dirname(__FILE__)) . '/classes/add_skill.class.php'); ?>
<fieldset>
	<form method="post" class="form form-horizontal" id="skill-add-form" action="page/skill_create.php">
		<div id="skill-message"></div>
		<fieldset>
                    
                        <div class="control-group">
				<label class="control-label" for="cat"><?php _e('Category'); ?></label>
				<div class="controls">
                                   <input type="text" class="input-xlarge" id="cat" name="cat" value="<?php echo $addLevel->getPost('cat'); ?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name"><?php _e('Name'); ?></label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="name" name="name" value="<?php echo $addLevel->getPost('name'); ?>">
				</div>
			</div>
			
                      
			
		 <div class="control-group">
                     <div class="controls">
                         
			<button type="submit" name="add_skill" class="btn btn-primary buttonsubmit" id="skill-add-submit"><?php _e('Create skill'); ?></button>
                     </div>
		</div>
		</fieldset>
	</form>
</fieldset>

<script>
$(document).ready(function() {
/** Create level form */
$("#skill-add-form").validate({

	/** admin add level form */
	submitHandler: function() {

		$('#skill-add-submit').button('loading');

		var post = $('#skill-add-form').serialize();
		var action = $("#skill-add-form").attr('action');

		$("#skill-message").slideUp(350, function () {

			$('#skill-message').hide();

			$.post(action, post, function (data) {

				$('#skill-message').html(data);

				document.getElementById('skill-message').innerHTML = data;
				$('#skill-message').slideDown('slow');
				if (data.match('success') !== null) {
					$('#skill-add-form input').val('');
					$('#skill-add-submit').button('reset');
				} else {
					$('#skill-add-submit').button('reset');
				}
			});
		});
	},
	rules: {
		level: "required",
		auth: {
			required: true,
			remote: {
				url: "classes/add_skill.class.php",
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