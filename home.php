<?php include_once('classes/signup.class.php'); ?>
<?php include_once('header.php'); ?>
<div><div>
        <div class="row">  

            <div class="col-md-6">
                <div class="homesearch">
                    <form class="form-inline col-md-8" role="form">
                        <div class="form-group">
                            <div class="input-group">
                                <label class="sr-only" for="homesearch">Email address</label>

                                <input type="text" class="form-control searchinput" id="homesearch" placeholder="Search..">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                    <div class="advancedsearch col-md-4"><input type="checkbox"/>Advanced Search</div>
                </div>
                <div class="divouter col-md-12">
                    <div class="randompro  ">

                    </div>
                </div>


            </div>

            <div class="col-md-6">
                <?php if (isset($_SESSION['pickme']['username'])) { ?>
                    <div> <?php
                        _e('Welcome , ');
                        echo $_SESSION['pickme']['username'];
                        ?>
<?php } else { ?>

                        <div class=" homelogin"><form class="form-inline" role="form" method="post" action="login.php">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                        <div class="input-group-addon">@</div>
                                        <input type="text" class="form-control username" id="exampleInputEmail2" name="username" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                    <input type="password" class="form-control username" name="password" id="exampleInputPassword2" placeholder="Password">
                                    <input type="hidden" name="token" value="<?php
                                    if (isset($_SESSION['pickme']['token'])) {
                                        echo $_SESSION['pickme']['token'];
                                    }
                                    ?>" />
                                </div>
                                <div class="checkbox">

                                    <input type="checkbox"> <span class="glyphicon glyphicon-saved"></span>

                                </div>
                                <button type="submit" class="login-submit" id="login-submit" name="login"><?php _e('Sign in'); ?></button>
                            </form> </div>

                        <div class="divouter">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="active"><a href="#">Join with us</a></li>

                            </ul>

                            <div class="sub-joinus">
                                <!--<div class="col-md-2">&nbsp</div>
                                <div class="col-md-3"><a href="studentSignup.php"><button type="button" class="btn btn-default">Student</button></a></div>
                                    <div class="col-md-3"><a href="staffSignup.php"><button type="button" class="btn btn-primary">Company</button></a></div>
                                    <div class="col-md-3"><a href="companySignup.php"><button type="button" class="btn btn-warning">Staff</button></a></div>
                                <div class="">&nbsp</div>-->

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentreg" data-whatever="@mdo">Student</button>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#companyreg" data-whatever="@fat">Company</button>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#staffreg" data-whatever="@twbootstrap">Staff</button>


                                <div class="modal fade" id="studentreg" tabindex="-1" role="" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="exampleModalLabel">Register as student</h4>
                                            </div>
                                            <div class="divouter">
                                                <form class="form-horizontal" method="post" action="studentSignup.php" id="st-sign-up-form">
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

                                                    </fieldset><center>
                                                        <input type="hidden" name="token" value="<?php echo $_SESSION['pickme']['token']; ?>"/>
                                                        <button type="submit" id="studentregsubmit" class="btn btn-primary"><?php _e('Create my account'); ?></button>
                                                        <button class="btn" id="resetbutton">Reset</button></center>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================== -->
                                <div class="modal fade" id="companyreg" tabindex="-1" role="" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="exampleModalLabel">Register as company</h4>
                                            </div>
                                            <div class="divouter">
                                                <form class="form-horizontal" method="post" action="companySignup.php" id="sign-up-form">
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label" for="name"><?php _e('company name'); ?></label>
                                                            <div class="col-sm-4">
                                                                <input type="text" class="input-xlarge" id="name" name="name" value="<?php echo $signUp->getPost('name'); ?>" placeholder="<?php _e('Company name'); ?>">
                                                            </div>
                                                        </div>


                                                        <div class="form-group" id="usrCheck">
                                                            <label class="col-sm-4 control-label" for="username"><?php _e('Username'); ?></label>				
                                                            <div class="col-sm-4">
                                                                <input type="text" class="input-xlarge" id="username" name="username" maxlength="15" value="<?php echo $signUp->getPost('username'); ?>" placeholder="<?php _e('Choose your username'); ?>">
                                                            </div>
                                                        </div> 

                                                        <div class="form-group" id="usrCheck">
                                                            <label class="col-sm-4 control-label" for="Registered_number"><?php _e('Registered number'); ?></label>				
                                                            <div class="col-sm-4">
                                                                <input type="text" class="input-xlarge" id="Registered_number" name="Registered_number" maxlength="15" value="<?php echo $signUp->getPost('Registered_number'); ?>" placeholder="<?php _e('Enter registered number'); ?>">
                                                            </div>        
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label" for="password"><?php _e('Password'); ?></label>				
                                                            <div class="col-sm-4">
                                                                <input type="password" class="input-xlarge" id="password" name="password" placeholder="<?php _e('Create a password'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label" for="password_confirm"><?php _e('re-enter Password'); ?></label>				
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
                                                            <div class="col-sm-5">
                                                                <input type="hidden" name="token" value="<?php echo $_SESSION['pickme']['token']; ?>"/>
                                                                <button type="submit" id="studentregsubmit" class="btn btn-primary"><?php _e('Create account'); ?></button>
                                                                <button class="btn" id="resetbutton">Reset</button>

                                                            </div> 
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
 <!-- ============================================== --> 
                                <div class="modal fade" id="staffreg" tabindex="-1" role="" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="exampleModalLabel">Register as staff</h4>
                                            </div>
                                            <div class="divouter">
                                                <form class="form-horizontal" method="post" action="staffSignup.php" id="sign-up-form">
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label" for="name"><?php _e('company name'); ?></label>
                                                            <div class="col-sm-4">
                                                                <input type="text" class="input-xlarge" id="name" name="name" value="<?php echo $signUp->getPost('name'); ?>" placeholder="<?php _e('Company name'); ?>">
                                                            </div>
                                                        </div>


                                                        <div class="form-group" id="usrCheck">
                                                            <label class="col-sm-4 control-label" for="username"><?php _e('Username'); ?></label>				
                                                            <div class="col-sm-4">
                                                                <input type="text" class="input-xlarge" id="username" name="username" maxlength="15" value="<?php echo $signUp->getPost('username'); ?>" placeholder="<?php _e('Choose your username'); ?>">
                                                            </div>
                                                        </div> 

                                                        <div class="form-group" id="usrCheck">
                                                            <label class="col-sm-4 control-label" for="Registered_number"><?php _e('Registered number'); ?></label>				
                                                            <div class="col-sm-4">
                                                                <input type="text" class="input-xlarge" id="Registered_number" name="Registered_number" maxlength="15" value="<?php echo $signUp->getPost('Registered_number'); ?>" placeholder="<?php _e('Enter registered number'); ?>">
                                                            </div>        
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label" for="password"><?php _e('Password'); ?></label>				
                                                            <div class="col-sm-4">
                                                                <input type="password" class="input-xlarge" id="password" name="password" placeholder="<?php _e('Create a password'); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label" for="password_confirm"><?php _e('re-enter Password'); ?></label>				
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
                                                            <div class="col-sm-5">
                                                                <input type="hidden" name="token" value="<?php echo $_SESSION['pickme']['token']; ?>"/>
                                                                <button type="submit" id="studentregsubmit" class="btn btn-primary"><?php _e('Create account'); ?></button>
                                                                <button class="btn" id="resetbutton">Reset</button>

                                                            </div> 
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <div id="forgot-form" class="modal">
                                <div class="modal-header">
                                    <a class="close" data-dismiss="modal">&times;</a>
                                    <h3><?php _e('Account Recovery'); ?></h3>
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
                                    <p class="pull-left"><?php _e('Please submit your username or email address.'); ?></p>
                                </div>
                            </div>

<?php } ?>
                    </div>
                    <div role="tabpanel" class="divouter">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">News</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Latest Profiles</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Latest Jobs</a></li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">This is latest news panel</div>
                            <div role="tabpanel" class="tab-pane" id="profile">Latest profile panel</div>
                            <div role="tabpanel" class="tab-pane" id="messages">latest job posting panel</div>

                        </div>

                    </div>


                </div>


            </div>

        </div>


        <div class="features">
            <div class="row">


            </div>

        </div>	

<?php include_once('footer.php'); ?>