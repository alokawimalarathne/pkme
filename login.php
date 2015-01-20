<?php require_once('classes/login.class.php'); ?>
<?php include_once('header.php'); ?>



<div id="forgot-form" class="modal  fade ">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <legend><?php _e('Account Recovery'); ?></legend>
    </div>
    <div class="modal-body">
        <div id="message"></div>
        <form action="forgot.php" method="post" name="forgotform" id="forgotform" class="form-stacked forgotform normal-label">
            
            <div class="controlgroup forgotcenter">
            <label for="usernamemail"><?php _e('Username or Email Address'); ?></label>
                <div class="control">
                    <input id="usernamemail" name="usernamemail" type="text"/>
                </div>
            </div>
            
            <input type="submit" class="hidden" name="forgotten">
        </form>
    </div>
    <div class="modal-footer">
            <button data-complete-text="<?php _e('Done'); ?>" class="btn btn-primary pull-right" id="forgotsubmit"><?php _e('Submit'); ?></button>
            <p class="pull-left"><?php _e('It\'ll be easy, We promise.'); ?></p>
    </div>
</div>





<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form method="post" class="form normal-label" action="login.php">
        
        <legend><?php _e('Sign in to Pickme'); ?></legend>
        
        
      

                      
                         <div class="col-md-12">    
                        <div class="form-group ">
                            <label class="" for="username" ><?php _e('Username'); ?></label>

                            <input type="text" class="form-control" placeholder="" id="username" name="username" value="">
<a data-toggle="modal" href="#forgot-form" id="forgotlink" tabindex=-1><?php _e('Trouble signing in'); ?></a>?
                        </div>
                          </div>
                          <div class="col-md-12">      
                        <div class="form-group ">
                            <label class="" for="password" ><?php _e('Pass word'); ?></label>

                            <input type="text" class="form-control" placeholder="" id="username" name="password" value="">
<a data-toggle="modal" href="#forgot-form" id="forgotlink" tabindex=-1><?php _e('Trouble signing in'); ?></a>?
                        </div>
                          </div>
                        
          
        <div class="col-md-12">    
        
       
         <div class="col-md-4">      
        <input type="hidden" name="token" value="<?php echo $_SESSION['pickme']['token']; ?>"/>
        <input type="submit" value="<?php _e('Sign in'); ?>" class="btn login-submit" id="login-submit" name="login"/>
         </div>
          <div class="col-md-8">  
        <label class="remember" for="remember">
                <input type="checkbox" id="remember" name="remember"/><?php _e('Stay signed in'); ?>
        </label>
          </div>
           <div class="col-md-12">    
       <a href="./"><?php _e('New to Pickme? <strong>Join today!</strong>'); ?></a>
           </div>
             <div class="col-md-12">  
        <?php if ( !empty($pickme_integration->enabledMethods) ) : ?>
       
                <?php foreach ($pickme_integration->enabledMethods as $key ) : ?>
                       <a href="login.php?login=<?php echo $key; ?>"><img src="assets/img/<?php echo $key; ?>_signin.png" alt="<?php echo $key; ?>"></a>
                <?php endforeach; ?>
        
        <?php endif; ?>
             </div>
        </div>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>
<?php include_once('footer.php'); ?>