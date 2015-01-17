<?php

include_once( dirname(dirname(__FILE__)) . '/classes/check.class.php');
protect("1");

if(empty($_POST))
	include_once('header.php');

include_once('classes/settings.class.php');
$settings = new Settings();
?>

	<div id="message"></div>

	  <div class="tabbable tabs-left">

		<ul class="nav nav-tabs">
			<li><a href="#general-options" data-toggle="tab"><i class="icon-cog"></i> <?php _e('General'); ?></a></li>
			<li><a href="#denied" data-toggle="tab"><i class="icon-exclamation-sign"></i> <?php _e('Denied'); ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope"></i> <?php _e('Emails'); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#emails-welcome" data-toggle="tab"><?php _e('Welcome'); ?></a></li>
                <li><a href="#emails-activate" data-toggle="tab"><?php _e('Activate'); ?></a></li>
                <li><a href="#emails-forgot" data-toggle="tab"><?php _e('Forgot'); ?></a></li>
                <li><a href="#emails-add-user" data-toggle="tab"><?php _e('Add user'); ?></a></li>
                <li><a href="#emails-acct-update" data-toggle="tab"><?php _e("'My Account' changes"); ?></a></li>
              </ul>
            </li>
			<li><a href="#user-profiles" data-toggle="tab"><i class="icon-user"></i> <?php _e('Profiles'); ?></a></li>
			<!--<li><a href="#integration" data-toggle="tab"><i class="icon-random"></i> <?php _e('Integration'); ?></a></li> -->
			
		</ul>

		<form class="form-horizontal" method="post" action="settings.php" id="settings-form">

			<div class="tab-content">

				<!-- - - - - - - - - - - - - - - - -

						General

				- - - - - - - - - - - - - - - - - -->
				<div class="tab-pane fade" id="general-options">
					<?php include_once('page/general-options.php'); ?>
				</div>

				<!-- - - - - - - - - - - - - - - - -

						Denied messages

				- - - - - - - - - - - - - - - - - -->
                                <div class="tab-pane fade" id="denied">                                    
                                  <?php //include_once('page/denied.php'); ?>
                                </div>

				<!-- - - - - - - - - - - - - - - - -

						Emails - Welcome

				- - - - - - - - - - - - - - - - - -->
                                <div class="tab-pane fade" id="emails-welcome">
                                     <?php include_once('page/emails-welcome.php'); ?>
                                </div>

				<!-- - - - - - - - - - - - - - - - -

						Emails - Activate

				- - - - - - - - - - - - - - - - - -->
                                    <div class="tab-pane fade" id="emails-activate">
                                    <?php include_once('page/emails-activate.php'); ?>
                                </div>

				<!-- - - - - - - - - - - - - - - - -

						Emails - Forgot

				- - - - - - - - - - - - - - - - - -->
                                <div class="tab-pane fade" id="emails-forgot">
                                     <?php include_once('page/emails-forgot.php'); ?>
                                </div>

				<!-- - - - - - - - - - - - - - - - -

						Emails - Add User

				- - - - - - - - - - - - - - - - - -->
                                <div class="tab-pane fade" id="emails-add-user">
                                    <?php include_once('page/emails-add-user.php'); ?>
                                </div>

				<!-- - - - - - - - - - - - - - - - -

						Emails - Account update

				- - - - - - - - - - - - - - - - - -->
                                <div class="tab-pane fade" id="emails-acct-update">
                                    <?php include_once('page/emails-acct-update.php'); ?>
                                </div>

				<!-- - - - - - - - - - - - - - - - -

						Profiles

				- - - - - - - - - - - - - - - - - -->

                                <div class="tab-pane fade" id="user-profiles">
                                    <?php include_once('page/user-profiles.php'); ?>
                                </div>

				<!-- - - - - - - - - - - - - - - - -

						Integration

				- - - - - - - - - - - - - - - - - -->
				<div class="tab-pane fade" id="integration"></div>

				

			</div>
                    <div class="divouter">
			<div class="col-md-12">
				<div class="form-actions">
					<button type="submit" data-loading-text="<?php _e('saving...'); ?>" data-complete-text="<?php _e('Changes saved'); ?>" name="save-settings" class="btn btn-primary" id="save-settings"><?php _e('Save changes'); ?></button>
				</div>
			</div>
                    </div>
		</form>
	  </div >

<?php include_once('footer.php'); ?>