<?php include_once('classes/check.class.php'); ?>
<?php include_once('header.php'); ?>

<div class="row">

	<div class="span6">
	<?php if( protectThis(1) ) : ?>
		<h1 class="page-header"><?php _e('Admin only text <small>User level: 1</small>'); ?></h1>
		<p><?php _e('')?></p>
		
	<?php else : ?>
		<div class="alert alert-warning"><?php _e('Only admins can view this content.'); ?></div>
	<?php endif; ?>
	</div>

	<div class="span6">
	<?php if( protectThis("1, 2") ) : ?>
		<h1 class="page-header"><?php _e('hello, staff user! <small>User level: 2</small>'); ?></h1>
		<p><?php _e(' ')?></p>
	<?php else : ?>
		<div class="alert alert-warning"><?php _e('Only admins or staff users can view this content.'); ?></div>
	<?php endif; ?>
	</div>

</div>

<div class="row">

	<div class="span6">
	<?php if( protectThis("*") ) : ?>
		<h1 class="page-header"><?php _e('All registered users <small>User level: * </small>'); ?></h1>
		<p><?php _e('Any user level in the entire world can see this! All that matters is that you\'re logged in.')?></p>
	
	<?php else : ?>
		<div class="alert alert-warning"><?php _e('Only signed in users can view what\'s hidden here!'); ?></div>
	<?php endif; ?>
	</div>

	<div class="span6">
		<h1 class="page-header"><?php _e('Public content. <small>No sign in required.</small>'); ?></h1>
		<p><?php _e('Anyone that is not signed in will be able to view your markup. ')?></p>
		
	</div>

</div>

<?php include_once('footer.php'); ?>