<?php include_once('classes/signup.class.php');
include_once ('classes/generic.class.php');?>

<?php include_once('header.php');
?>

<div class="row">   
    <div class="divouter">
        <form class="form-horizontal" method="post" action="studentSignup.php?level=3" id="st-sign-up-form">
            <fieldset>
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label"><?php _e('First name'); ?></label>
                    <div class="col-sm-4">
                        <input type="text" class="input-xlarge" id="name" name="name" value="<?php echo $signUp->getPost('name'); ?>" placeholder="<?php _e('First name'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label" for="lname"><?php _e('Last name'); ?></label>
                    <div class="col-sm-4">
                        <input type="text" class="input-xlarge" id="lname" name="lname" value="<?php echo $signUp->getPost('lname'); ?>" placeholder="<?php _e('Last name'); ?>">
                    </div>
                </div>

                <div class="form-group" id="usrCheck">
                    <label class="col-sm-4 control-label" for="username"><?php _e('Username'); ?></label>				
                    <div class="col-sm-4">
                        <input type="text" class="input-xlarge" id="username" name="username" maxlength="15" value="<?php echo $signUp->getPost('username'); ?>" placeholder="<?php _e('Choose your username'); ?>">
                    </div>
                </div>      

                <div class="form-group" id="usrCheck">
                    <label class="col-sm-4 control-label" for="registration_number"><?php _e('Registration number'); ?></label>				
                    <div class="col-sm-4">
                        <input type="text" class="input-xlarge" id="registration_number" name="registration_number" maxlength="15" value="<?php echo $signUp->getPost('registration_number'); ?>" placeholder="<?php _e('Your registration number'); ?>">
                    </div>        
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="password"><?php _e('Password'); ?></label>				
                    <div class="col-sm-4">
                        <input type="password" class="input-xlarge" id="password" name="password" placeholder="<?php _e('Create a password'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="password_confirm"><?php _e('Re-enter Password'); ?></label>				
                    <div class="col-sm-4">
                        <input type="password" class="input-xlarge" id="password_confirm" name="password_confirm" placeholder="<?php _e('Confirm your password'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="email"><?php _e('Email'); ?></label>				
                    <div class="col-sm-4">
                        <input type="email" class="input-xlarge" id="email" name="email" value="<?php echo $signUp->getPost('email'); ?>" placeholder="<?php _e('Email'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="email_confirm"><?php _e('Re-enter Email'); ?></label>				
                    <div class="col-sm-4">
                        <input type="email" class="input-xlarge" id="email_confirm" name="email_confirm" value="<?php echo $signUp->getPost('Confirm your email'); ?>" placeholder="<?php _e('Confirm your Email'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <?php $signUp->profileSignUpFields(); ?>
                </div>

                <div class="form-group">
                    <?php $signUp->doCaptcha(true); ?>
                </div>

                
                <div class="form-group">
                   <label class="col-sm-4 control-label"  for="InputMessage"></label>
                   <div class="col-sm-4">
                        <input type="hidden" name="token" value="<?php echo $_SESSION['pickme']['token']; ?>"/>
                        <button type="submit" id="studentregsubmit" class="btn btn-primary"><?php _e('Create account'); ?></button>
                        <button class="btn" id="resetbutton">Reset</button>

                    </div> 
                </div>
            </fieldset>
                
                
                
        </form>
    </div>

</div>

<?php include_once('footer.php'); ?><?php
