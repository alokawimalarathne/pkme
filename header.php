<?php ob_start(); ?>
<?php include_once('classes/translate.class.php'); ?>
<?php if (!isset($_SESSION)) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PickMe UCSC Job Seekers' Portal</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="PickMe UCSC Job Seekers' Portal">		

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- styles -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">           
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="assets/css/pickme.css" rel="stylesheet">

    </head>
    <body> 

        <!-- Navigation
        ================================================== -->

        <div class="navbar navbar-fixed-top" >
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <div class="logo">
                            <a class="imagelogo" href="./">
                                <img src="images/logo.png" />
                            </a>
                        </div>     

                        <div class="nav-collapse">
                            <ul class="nav nav-pills col-md-8">
                                <li  role="presentation" class="active"><a href="home.php"><?php _e('HOME'); ?></a></li>
                                <li role="presentation"><a href="about_us.php"><?php _e('ABOUT US'); ?></a></li>
                                <li role="presentation"><a href="resources.php"><?php _e('RESOURCES'); ?></a></li>
                                <li role="presentation"><a href="contact_us.php"><?php _e('CONTACT US'); ?></a></li>
                                <li role="presentation"><a href="protected.php"><?php _e('TEST PAGE'); ?></a></li>
                                <?php if (isset($_SESSION['pickme']['user_level']) && in_array(1, $_SESSION['pickme']['user_level'])) { ?>
                                    <li role="presentation"><a href="admin/"><?php _e('ADMIN PANEL'); ?></a></li>
                                <?php } ?>
                            </ul>
                            <?php if (isset($_SESSION['pickme']['username'])) { ?>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle col-md-2 " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        <span id="userDrop">
                                            <span class="pull-left"><?php echo $_SESSION['pickme']['gravatar']; ?></span>
                                            <div class="dropbutton"><a   href="#"><?php echo $_SESSION['pickme']['username']; ?></a>
                                                <b class="caret"></b></div>
                                        </span>

                                    </button>
                                    <ul class="dropdown-menu pull-right menuright" role="menu" aria-labelledby="dropdownMenu1">
                                        <?php if (in_array(1, $_SESSION['pickme']['user_level'])) { ?>
                                            <li><a href="admin/index.php"><i class="icon-home"></i> <?php _e('Control Panel'); ?></a></li>
                                            <li><a href="admin/settings.php"><i class="icon-cog"></i> <?php _e('Settings'); ?></a></li> <?php } ?>
                                        <li><a href="profile.php"><i class="icon-user"></i> <?php _e('My Account'); ?></a></li>
                                        <li><a href="#" target="_blank"><i class="icon-info-sign"></i> <?php _e('Help'); ?></a></li>
                                        <li class="divider"></li>
                                        <li><a href="logout.php"><?php _e('Sign out'); ?></a></li>
                                    </ul>
                                </div>
                            <?php } else { ?>
                                <!--<ul class="nav pull-right">
                                    <li><a href="login.php" class="signup-link"><em><?php _e('Have an account?'); ?></em> <strong><?php _e('Sign in!'); ?></strong></a></li>
                                    <li><a href="register.php" class="signup-link"><em><?php _e('New to Pickme?'); ?></em> <strong><?php _e('Join today!'); ?></strong></a></li>
                                </ul>-->
                            <?php } ?>
                        </div>
                    </div>
                </div><!-- /navbar-inner -->
            </div><!-- /navbar -->
        </div><!-- /navbar-wrapper -->

        <!-- Main content
        ================================================== -->
        <div class="container" >
            <div class="">

                <div class="page">
