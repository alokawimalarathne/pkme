<?php ob_start(); ?>
<?php if (!isset($_SESSION)) session_start(); ?>
<?php include_once(dirname(dirname(__FILE__)) . '/classes/translate.class.php'); ?>
<?php include_once(dirname(__FILE__) . '/classes/functions.php'); ?>

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
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/css/bootstrap-responsive.min.css" rel="stylesheet">
                <link href="../assets/css/pickme.css" rel="stylesheet">
		<link href="assets/css/datepicker.css" rel="stylesheet">
		<link href="assets/js/chosen/chosen.css" rel="stylesheet">
		<link href="assets/css/prettify.css" rel="stylesheet">
               <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

		<!-- Added library to header in order to load reports -->
		

	</head>

	<body/>

<!-- Navigation
================================================== -->

	<div class="navbar navbar-fixed-top" >
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <div class="logo">
                            <a class="imagelogo" href="./">
                                <img src="../images/logo.png" />
                            </a>
                        </div>  
                         <div class="nav-collapse">
                            <ul class="nav nav-pills col-md-8">
				<li  role="presentation" class="active"><a href="home.php"><?php _e('HOME'); ?></a></li>
						<li><a href="../protected.php"><?php _e('Secure page'); ?></a></li>
						<li><a href="index.php"><?php _e('Admin panel'); ?></a></li>
					</ul>
		<?php if(isset($_SESSION['pickme']['username'])) { ?>
		<ul class="nav pull-right">
			<li class="dropdown">
				<p class="navbar-text dropdown-toggle" data-toggle="dropdown" id="userDrop"><?php echo $_SESSION['pickme']['gravatar']; ?> <a href="#"><?php echo $_SESSION['pickme']['username']; ?></a><b class="caret"></b></p>
				<ul class="dropdown-menu">
		<?php if(in_array(1, $_SESSION['pickme']['user_level'])) { ?>
					<li><a href="index.php"><i class="icon-home"></i> <?php _e('Control Panel'); ?></a></li>
					<li><a href="settings.php"><i class="icon-cog"></i> <?php _e('Settings'); ?></a></li> <?php } ?>
					<li><a href="../profile.php"><i class="icon-user"></i> <?php _e('My Account'); ?></a></li>
					<li><a href="#"><i class="icon-info-sign"></i> <?php _e('Help'); ?></a></li>
					<li class="divider"></li>
					<li><a href="../logout.php"><?php _e('Sign out'); ?></a></li>
				</ul>
			</li>
		</ul>
		<?php } else { ?>
		<ul class="nav pull-right">
			<li><a href="../login.php" class="signup-link"><em><?php _e('Have an account?'); ?></em> <strong><?php _e('Sign in!'); ?></strong></a></li>
		</ul>
		<?php } ?>
				</div>
				</div>
			</div><!-- /navbar-inner -->
		</div><!-- /navbar -->
	</div><!-- /navbar-wrapper -->

<!-- Main content
================================================== -->
		<div class="container">
			<div class="">

				<div class="page">