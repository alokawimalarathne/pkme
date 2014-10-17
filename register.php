<?php require_once('classes/login.class.php'); ?>
<?php include_once('header.php'); ?>



<div class="row">
	<div class="main login">
		<form method="post" class="form normal-label" action="login.php">
		<p class="signup"><?php _e('New to Pickme? <strong>Join today!</strong>'); ?></a></p>
                <p class="signup"><a href="studentSignup.php"><?php _e('Join as student'); ?></a></p>
                <p class="signup"><a href="staffSignup.php"><?php _e('Join as staff'); ?></a></p>
                <p class="signup"><a href="companySignup.php"><?php _e('Join as company'); ?></a></p>

		<?php if ( !empty($pickme_integration->enabledMethods) ) : ?>


		<?php endif; ?>

		</form>
	</div>

</div>
<?php include_once('footer.php'); ?>

