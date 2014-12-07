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
                    <div> <?php _e('Welcome , ');
                echo $_SESSION['pickme']['username']; ?>
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
                                        <input type="hidden" name="token" value="<?php if (isset($_SESSION['pickme']['token'])) {
                            echo $_SESSION['pickme']['token'];
                        } ?>" />
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
                                    <div class="col-md-2">&nbsp</div>
                                    <div class="col-md-3"><a href="studentSignup.php"><button type="button" class="btn btn-default">Student</button></a></div>
                                        <div class="col-md-3"><a href="staffSignup.php"><button type="button" class="btn btn-primary">Company</button></a></div>
                                        <div class="col-md-3"><a href="companySignup.php"><button type="button" class="btn btn-warning">Staff sds</button></a></div>
                                    <div class="">&nbsp</div>
                                </div>
                        
                            
                            <script type="text/javascript">
                             $('#myTab a').click(function (e) {
                                  e.preventDefault()
                                  $(this).tab('show')
                                })
                                
                            </script>                        
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
    <div role="tabpanel" class="tab-pane active" id="home">...</div>
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
   
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