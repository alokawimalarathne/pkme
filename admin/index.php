<?php

include_once( dirname(dirname(__FILE__)) . '/classes/check.class.php');
include_once('../classes/translate.class.php');
protect("1");

if ( !isset($_POST['add_user']) && !isset($_POST['add_level']) && !isset($_POST['searchUsers']) )
	include_once('header.php');

?>

		<div class="tabbable tabs-left">
			<div id="search_suggest"></div>
			<ul class="nav nav-tabs">
				<li><a href="#user-control" data-toggle="tab"><i class="icon-list"></i> <?php _e('Users'); ?></a></li>
				<li><a href="#level-control" data-toggle="tab"><i class="icon-list"></i> <?php _e('Levels'); ?></a></li>
                                <li><a href="#articles" data-toggle="tab"><i class="icon-folder-open"></i> <?php _e('Articles'); ?></a></li>
                                <li><a href="#skills" data-toggle="tab"><i class="icon-folder-open"></i> <?php _e('Skills'); ?></a></li>
                                <li><a href="#jobs" data-toggle="tab"><i class="icon-folder-open"></i> <?php _e('Jobs'); ?></a></li>
				<li><a href="#reports" data-toggle="tab"><i class="icon-folder-open"></i> <?php _e('Reports'); ?></a></li>
				<li><a href="#send-email" data-toggle="tab"><i class="icon-envelope"></i> <?php _e('Send email'); ?></a></li>
				<li><a href="settings.php"><i class="icon-cog"></i> <?php _e('Settings'); ?></a></li>
			</ul>

			<div class="tab-content">

				<!-- - - - - - - - - - - - - - - - -

						Control users

				- - - - - - - - - - - - - - - - - -->
				<div class="tab-pane fade" id="user-control">
					<?php include_once('page/user-control.php'); ?>
				</div>

				<!-- - - - - - - - - - - - - - - - -

						Modify levels

				- - - - - - - - - - - - - - - - - -->

                                <div class="tab-pane fade" id="level-control">
                                    <?php include_once('page/level-control.php'); ?>
                                </div>
                                <!-- - - - - - - - - - - - - - - - -

						Articles

				- - - - - - - - - - - - - - - - - -->
                                <div class="tab-pane fade" id="articles">
                                    <?php include_once('page/articles.php'); ?>
                                </div>
				<!-- - - - - - - - - - - - - - - - -
                                		Skills

				- - - - - - - - - - - - - - - - - -->
                                <div class="tab-pane fade" id="skills">
                                    <?php include_once('page/skills.php'); ?>
                                </div>
                                   <!-- - - - - - - - - - - - - - - - -             
                                		Jobs

				- - - - - - - - - - - - - - - - - -->
                                <div class="tab-pane fade" id="jobs">
                                    <?php include_once('page/jobs.php'); ?>
                                </div>
				<!-- - - - - - - - - - - - - - - - -
						Reports

				- - - - - - - - - - - - - - - - - -->
                                <div class="tab-pane fade" id="reports">
                                     <?php //include_once('page/reports.php'); ?>
                                </div>

				<!-- - - - - - - - - - - - - - - - -

						Send email

				- - - - - - - - - - - - - - - - - -->
                                <div class="tab-pane fade" id="send-email">
                                    <?php //include_once('page/send-email.php'); ?>
                                </div>

		</div>
		</div>

<?php include_once('footer.php'); ?>