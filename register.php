<?php require_once('classes/login.class.php'); ?>
<?php include_once('header.php'); ?>
<div class="row">
    <div class="main login">
        <form method="post" class="form normal-label">
        <h2><span><a href="register.php">Join With Us</a></span></h2><br/><br/><br/>
        <p class="btn login-submit"><a href="studentSignup.php"><?php _e('Join as Student'); ?></a></p>
        <p class="btn login-submit"><a href="staffSignup.php"><?php _e('Join as Staff'); ?></a></p>
        <p class="btn login-submit"><a href="companySignup.php"><?php _e('Join as Company'); ?></a></p>
        <br/><br/><br/><br/><br/><br/>
        <img src="images/jobportal1.jpg" width="550" height="300"/><br/><br/>
        <?php if ( !empty($pickme_integration->enabledMethods) ) : ?>
        <?php endif; ?>
        </form>
    </div>
</div>

    
    
    
    
    
    
    
    
    
    <?php include_once('footer.php'); ?>

