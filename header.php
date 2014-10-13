<?php ob_start(); ?>
<?php include_once('classes/translate.class.php'); ?>
<?php if (!isset($_SESSION)) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<body style="background-color:AliceBlue"><br/>
		<meta charset="utf-8">
		<title>PickMe UCSC Job Seekers' Portal</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="PickMe UCSC Job Seekers' Portal">		

		<!--HTML5 shim, for IE6-8 support of HTML elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- styles -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="assets/css/pickme.css" rel="stylesheet">

	</head>

	<body>

<!-- Navigation
================================================== -->

	<div class="navbar navbar-fixed-top">
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">

				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="home.php"><img src="images/logo.png" height="35"/></a>
				<h3><a class="brand" href="home.php"><?php _e('PickMe'); ?></a></h3>
				<div class="nav-collapse">
					<ul class="nav">
						<li><a href="home.php"><?php _e('Home'); ?></a></li>
						<li><a href="about_us.php"><?php _e('About Us'); ?></a></li>
						<li><a href="resources.php"><?php _e('Resources'); ?></a></li>
						<li><a href="contact_us.php"><?php _e('Contact Us'); ?></a></li>
                                                <li><a href="protected.php"><?php _e('Test Page'); ?></a></li>
                                                <?php  if(isset($_SESSION['pickme']['user_level']) && in_array(1, $_SESSION['pickme']['user_level'])) { ?>
						<li><a href="admin/"><?php _e('Admin panel'); ?></a></li>
                                                <?php } ?>
					</ul>
		<?php if(isset($_SESSION['pickme']['username'])) { ?>
		<ul class="nav pull-right">
			<li class="dropdown">
				<p class="navbar-text dropdown-toggle" data-toggle="dropdown" id="userDrop">
					<?php echo $_SESSION['pickme']['gravatar']; ?>
					<a href="#"><?php echo $_SESSION['pickme']['username']; ?></a>
					<b class="caret"></b>
				</p>
				<ul class="dropdown-menu">
		<?php if(in_array(1, $_SESSION['pickme']['user_level'])) { ?>
					<li><a href="admin/index.php"><i class="icon-home"></i> <?php _e('Control Panel'); ?></a></li>
					<li><a href="admin/settings.php"><i class="icon-cog"></i> <?php _e('Settings'); ?></a></li> <?php } ?>
					<li><a href="profile.php"><i class="icon-user"></i> <?php _e('My Account'); ?></a></li>
					<li><a href="#" target="_blank"><i class="icon-info-sign"></i> <?php _e('Help'); ?></a></li>
					<li class="divider"></li>
					<li><a href="logout.php"><?php _e('Sign out'); ?></a></li>
				</ul>
			</li>
		</ul>
		<?php } else { ?>
		<ul class="nav pull-right">
			<li><a href="login.php" class="signup-link"><em><?php _e('Have an account?'); ?></em> <strong><?php _e('Sign in!'); ?></strong></a></li>
			<li><a href="sign_up.php" class="signup-link"><em><?php _e('New to Pickme?'); ?></em> <strong><?php _e('Join today!'); ?></strong></a></li>
		</ul>
		<?php } ?>
				</div>
				</div>
			</div><!-- /navbar-inner -->
		</div><!-- /navbar -->
	</div><!-- /navbar-wrapper -->

<!-- Main content
================================================== -->
		<div class="container" >
			<div class="row">

				<div class="span12">
