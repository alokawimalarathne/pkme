<?php include_once('classes/profile.class.php');?>
<?php include_once('header.php');?>

<h1>

	<a href="http://gravatar.com/emails/" class="a-tooltip" data-rel="tooltip-bottom" title="<?php _e('Change your avatar at Gravatar.com'); ?>">
		<img class="gravatar thumbnail" src="<?php echo $profile->get_gravatar($profile->getField('email'), false, 54); ?>"/>
	</a>

	<?php echo $profile->getField('username') . ' (' . $profile->getField('name') . ')'; ?>

</h1>

<br>

<div class="tabs-left">

	<ul class="nav nav-tabs">

		<?php if ( !$profile->guest ) : ?>
			<li class="active"><a href="#usr-control" data-toggle="tab"><i class="icon-cog"></i> <?php _e('General'); ?></a></li>
		<?php endif; ?>
		<?php $profile->generateProfileTabs($profile->guest); ?>
		<?php if (!$profile->guest && !$profile->denyAccessLogs()) : ?>
		<li><a href="#usr-access-logs" data-toggle="tab"><i class="icon-list-alt"></i> <?php _e('Access logs'); ?></a></li>
		<?php endif; ?>

		<?php if ( !$profile->guest && !empty( $pickme_integration->enabledMethods ) ) : ?>
		<li><a href="#usr-integration" data-toggle="tab"><i class="icon-random"></i> <?php _e('Integration'); ?></a></li>
		<?php endif; ?>

	</ul>

	<form role="form" method="post" action="profile.php">
	<div class="tab-content">

		<?php if ( !$profile->guest ) : 
 
                    ?>
            
		<div class="tab-pane fade in active" id="usr-control">
                    <div class="col-md-12">	
			
				<legend><?php _e('General'); ?></legend>
                                
                                
                                <div class="form-group col-xs-4">
                                        <label class="" for="name" ><?php _e('First Name'); ?></label>
                                       
                                            <input type="text" class="form-control" placeholder="" id="name" name="name" value="<?php echo $profile->getField('name'); ?>">
                                         
                                    </div>

          
          
          
				<div class="form-group col-xs-4">
					<label class="" for="lname"><?php _e('Last Name'); ?></label>
					
						<input type="text" class="form-control" id="lname" name="lname" value="<?php echo $profile->getField('lname'); ?>">
					
				</div>
				<div class="form-group col-xs-4">
					<label class="" for="email"><?php _e('Email'); ?></label>
					
						<input type="email" class="form-control" id="email" name="email" value="<?php echo $profile->getField('email'); ?>">
					
				</div>
                                <div class="form-group col-xs-4">
					<label class="" for="CurrentPass"><?php _e('Current password'); ?></label>
					
						<input type="password" autocomplete="off" class="form-control" id="CurrentPass" name="CurrentPass" >
					
				</div>
				<div class="form-group col-xs-4">
					<label class="" for="password"><?php _e('New password'); ?></label>
					
						<input type="password" autocomplete="off" class="form-control" id="password" name="password" placeholder="<?php _e('Leave blank for no change'); ?>">
					
				</div>

				<div class="form-group col-xs-4">
					<label class="" for="confirm"><?php _e('New password again'); ?></label>
					
						<input type="password" autocomplete="off" class="form-control" id="confirm" name="confirm" placeholder="<?php _e('Leave blank for no change'); ?>">
					
				</div>
                                <?php
                                    $level = $_SESSION['pickme']['user_level'];
                                    $level = array_shift($level);
                                    if ($level == 3) {
                                        ?>
                               
					
				
                                <legend><?php _e('Skill Set'); ?></legend>
                                <div class="form-group col-xs-4">
                                            <label class="" for="programing"><?php _e('Software programing'); ?></label>
                                            <select multiple class="form-control" id="programing" name="programing">
                                                <option value='1'>Java</option>
                                                <option value='2'>.NET</option>
                                                <option value='3'>C/C++</option>                                                
                                                <option value='4'>Objective-C</option>
                                                <option value='5'>Python</option>
                                                <option value='6'>Scala</option>
                                            </select>

                                </div>
                                  <div class="form-group col-xs-4">
                                            <label class="" for="CurrentPass"><?php _e('Networking'); ?></label>
                                            <select multiple class="form-control" id="programing" name="programing">
                                                <option value='1'>Wireless</option>
                                                <option value='2'>Routing</option>
                                                <option value='3'>Switching</option>                                                
                                                <option value='4'>TCP/IP</option>
                                                <option value='5'>Virtualization<option>
                                                <option value='6'>DHCP</option>
                                                <option value='7'>LDAP</option>
                                                <option value='8'>Unix/Linux servers</option>
                                                <option value='9'>Windows servers</option>                                                
                                            </select>

                                </div>
                                  <div class="form-group col-xs-4">
                                            <label class="" for="CurrentPass"><?php _e('Web applications'); ?></label>
                                            <select multiple class="form-control" id="programing" name="programing">
                                                <option value='1'>PHP</option>
                                                <option value='2'>Java</option>
                                                <option value='3'>Python</option>
                                                <option value='3'>Ruby</option>       
                                                <option value='4'>SQL/MySql</option>
                                                <option value='5'>Javascript</option>
                                                <option value='6'>HTML4/HTML5</option>
                                                <option value='7'>Joomla</option>
                                                 <option value='8'>Wordpress</option>
                                                 <option value='9'>Drupal</option>
                                                  <option value='10'>eCommerce</option>
                                            </select>

                                </div>
                                <div class="form-group col-xs-4">
                                            <label class="" for="CurrentPass"><?php _e('Business'); ?></label>
                                            <select multiple class="form-control" id="programing" name="programing">
                                                <option value='1'>PHP</option>
                                                <option value='2'>Java</option>
                                                <option value='3'>Python</option>
                                                <option value='3'>Ruby</option>       
                                                <option value='4'>SQL/MySql</option>
                                                <option value='5'>Javascript</option>
                                                <option value='6'>HTML4/HTML5</option>
                                                <option value='7'>Joomla</option>
                                                 <option value='8'>Wordpress</option>
                                                 <option value='9'>Drupal</option>
                                                  <option value='10'>eCommerce</option>
                                            </select>

                                </div>
                                <div class="form-group col-xs-4">
                                            <label class="" for="CurrentPass"><?php _e('Professional'); ?></label>
                                            <select multiple class="form-control" id="programing" name="programing">
                                                <option value='1'>CIMA</option>
                                                <option value='2'>CIM</option>
                                                <option value='3'>Charted</option>
                                                <option value='3'>AAT</option>       
                                                <option value='4'>CCNA</option>
                                                <option value='5'>CCNP</option>
                                                <option value='6'>Java certification</option>
                                                <option value='7'>Zend Certificate</option>
                                                 <option value='8'>Wordpress</option>
                                                 <option value='9'>Drupal</option>
                                                  <option value='10'>eCommerce</option>
                                            </select>

                                </div>
                                
                                <?php } ?>
				<?php if ( $profile->getOption('profile-public-enable') ) : ?>
				<div class="form-group col-xs-4">
					<label class="" for="confirm"><?php _e('Your public link'); ?></label>
					
						<span class="uneditable-input"><?php echo SITE_PATH . 'profile.php?uid=' . $profile->getField('user_id'); ?></span>
					
				</div>
                                <!--   for students only   -->
                                
                                
				<?php endif; ?>

			
                </div>
		</div>
		<?php endif; ?>

		<?php $profile->generateProfilePanels($profile->guest); ?>

		<?php if (!$profile->guest && !$profile->denyAccessLogs()) : ?>
		<div class="tab-pane fade" id="usr-access-logs">
			<fieldset>
				<legend><?php _e('Access Logs'); ?></legend>
				<?php $profile->generateAccessLogs(); ?>
			</fieldset>
		</div>
		<?php endif; ?>

		<?php if ( !$profile->guest && !empty( $pickme_integration->enabledMethods ) ) : ?>
		<div class="tab-pane fade" id="usr-integration">
                    
                    <fieldset>
				<legend><?php _e('Integration'); ?></legend><br>

				<p><?php _e('Use your preferred social method to login the next time you visit our site.'); ?></p><br>

				<?php

					foreach ($pickme_integration->enabledMethods as $key ) :
						$inUse = $pickme_integration->isUsed($key);
						?><div class="span3">
							<a class="a-tooltip" href="#" data-rel="tooltip" tabindex="99" title="<?php echo ucwords($key); ?>">
								<img src="assets/img/<?php echo $key; ?>.png" alt="<?php echo $key; ?>">
							</a>
							<a href="<?php echo $inUse ? '#' : '?link='.$key; ?>" class="btn btn-small btn-info<?php echo $inUse ? ' disabled' : ''; ?>"><?php _e('Link'); ?></a>
							<a href="<?php echo !$inUse ? '#' : '?unlink='.$key; ?>" class="btn btn-small<?php echo !$inUse ? ' disabled' : ''; ?>"><?php _e('Unlink'); ?></a>
							</div><?php

					endforeach;

				?>

			</fieldset>
                   
		</div>
		<?php endif; ?>

		<?php if ( !$profile->guest ) : ?>
		
             <div class="form-group col-xs-4 form-actions">
                                       <button type="submit" class="btn btn-primary"><?php _e('Save changes'); ?></button>

             </div>
		<?php endif; ?>

	</div>
	</form>
</div>

<?php include ('footer.php'); ?>