<?php include_once('admin.php'); ?>
<?php include_once(dirname(dirname(__FILE__)) . '/classes/add_article.class.php'); ?>
<fieldset>
	<form method="post" class="form form-horizontal" id="article-add-form" action="page/article-create.php">
		<div id="article-message"></div>
		<fieldset>
			<div class="control-group">
				<label class="control-label" for="name"><?php _e('Name'); ?></label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="name" name="name" value="<?php echo $addLevel->getPost('name'); ?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="category"><?php _e('Category'); ?></label>
				<div class="controls">
                                    <select class="selectpicker" name="category">
                                            <option value='news'>News</option>
                                            <option value='resources'>Resources</option>
                                            
                                        </select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="content"><?php _e('Content'); ?></label>
				<div class="controls">
					<textarea class="form-control" id="article-content" name="content" rows="10" autocomplete="off"></textarea>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label" for="published"><?php _e('Publish'); ?></label>
                                <div class="controls">
				<label class="checkbox-inline">
                                    <input type="checkbox" id="publishedyes" value="1" name='published'> Yes
                                  </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="publishedno" value="0" name='published'> No
                                </label>
                                </div>
			</div>
		 <div class="control-group">
                     <div class="controls">
                         
			<button type="submit" name="add_article" class="btn btn-primary buttonsubmit" id="article-add-submit"><?php _e('Create article'); ?></button>
                     </div>
		</div>
		</fieldset>
	</form>
</fieldset>

<script>
$(document).ready(function() {
/** Create level form */
$("#article-add-form").validate({

	/** admin add level form */
	submitHandler: function() {

		$('#article-add-submit').button('loading');

		var post = $('#article-add-form').serialize();
		var action = $("#article-add-form").attr('action');

		$("#article-message").slideUp(350, function () {

			$('#article-message').hide();

			$.post(action, post, function (data) {

				$('#article-message').html(data);

				document.getElementById('article-message').innerHTML = data;
				$('#article-message').slideDown('slow');
				if (data.match('success') !== null) {
					$('#article-add-form input').val('');
					$('#article-add-submit').button('reset');
				} else {
					$('#article-add-submit').button('reset');
				}
			});
		});
	},
	rules: {
		level: "required",
		auth: {
			required: true,
			remote: {
				url: "classes/add_article.class.php",
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