<?php include_once('classes/signup.class.php'); ?>
<?php include_once('header.php'); ?>

<div class="row">
	<div class="span6">
		<form class="form-horizontal" method="post" action="sign_up.php" id="sign-up-form">
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="name"><?php _e('First name'); ?></label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="name" name="name" value="<?php echo $signUp->getPost('name'); ?>" placeholder="<?php _e('First name'); ?>">
					</div>
				</div>
                            
				<div class="control-group">
					<label class="control-label" for="lname"><?php _e('Last name'); ?></label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="lname" name="lname" value="<?php echo $signUp->getPost('lname'); ?>" placeholder="<?php _e('Last name'); ?>">
					</div>
				</div>
                            
				<div class="control-group" id="usrCheck">
					<label class="control-label" for="username"><?php _e('Username'); ?></label>				
					<div class="controls">
						<input type="text" class="input-xlarge" id="username" name="username" maxlength="15" value="<?php echo $signUp->getPost('username'); ?>" placeholder="<?php _e('Choose your username'); ?>">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="password"><?php _e('Password'); ?></label>				
					<div class="controls">
						<input type="password" class="input-xlarge" id="password" name="password" placeholder="<?php _e('Create a password'); ?>">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="password_confirm"><?php _e('Password again'); ?></label>				
					<div class="controls">
						<input type="password" class="input-xlarge" id="password_confirm" name="password_confirm" placeholder="<?php _e('Confirm your password'); ?>">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="email"><?php _e('Email'); ?></label>				
					<div class="controls">
						<input type="email" class="input-xlarge" id="email" name="email" value="<?php echo $signUp->getPost('email'); ?>" placeholder="<?php _e('Email'); ?>">
					</div>
				</div>

				<div class="control-group">
					<?php $signUp->profileSignUpFields(); ?>
				</div>
				
				<div class="control-group">
					<?php $signUp->doCaptcha(true); ?>
				</div>

			</fieldset>
			<input type="hidden" name="token" value="<?php echo $_SESSION['pickme']['token']; ?>"/>
			<button type="submit" class="btn btn-primary"><?php _e('Create my account'); ?></button>
		</form>
	</div>
	<div class="span6">
		<h1><?php _e('Create a new account'); ?></h1>
		<p><?php _e('Account creating instructions account creating instructions account creating instructions account creating instructions account creating instructions account creating instructions account creating instructions account creating instructions account creating instructions account creating instructions account creating instructions account creating instructions account creating instructions account creating instructions account creating instructions '); ?></p>
		<h2><?php _e('Features'); ?></h2>
		<p><?php _e('features goes here.'); ?></p>
	</div>
</div>

<?php include_once('footer.php'); ?>