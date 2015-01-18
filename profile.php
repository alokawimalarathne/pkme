<?php include_once('classes/profile.class.php');?>
<?php include_once('classes/check.class.php');?>
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

	<form role="form" method="post" action="profile.php" enctype="multipart/form-data">
	<div class="tab-content">

		<?php if ( !$profile->guest ) : 
 
                    ?>
            
            <div class="tab-pane fade useredit in active" id="usr-control">
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
                        <div class="form-group col-xs-4">
                            <label class="" for="mobile"><?php _e('Mobile'); ?></label>

                            <input type="number" min="0700000000"  autocomplete="off" class="form-control" id="confirm" name="mobile" placeholder="<?php _e('Mobile'); ?>" value="<?php echo $profile->getField('mobile'); ?>">

                        </div>
                        <?php  if( protectThis("3") ){  ?>

                            <legend><?php _e('Skill Set'); ?></legend>
                            <div class="form-group col-xs-4">
                                <label class="" for="programing"><?php _e('Software programing'); 
                               /// $data = ($profile->getField('programing'));
                              // echo '<pre>'; print_r(unserialize(base64_decode($data)));?>
                                
                                </label>
                                <select multiple class="form-control" id="programing" name="programing[]">
                                    <option value='1' <?php echo (in_array('1', unserialize(base64_decode($profile->getField('programing'))))) ?  "selected" : "" ;  ?>>Java</option>
                                    <option value='2' <?php echo (in_array('2', unserialize(base64_decode($profile->getField('programing'))))) ?  "selected" : "" ;  ?>>.NET</option>
                                    <option value='3' <?php echo (in_array('3', unserialize(base64_decode($profile->getField('programing'))))) ?  "selected" : "" ;  ?>>C/C++</option>                                                
                                    <option value='4' <?php echo (in_array('4', unserialize(base64_decode($profile->getField('programing'))))) ?  "selected" : "" ;  ?>>Objective-C</option>
                                    <option value='5' <?php echo (in_array('5', unserialize(base64_decode($profile->getField('programing'))))) ?  "selected" : "" ;  ?>>Python</option>
                                    <option value='6' <?php echo (in_array('6', unserialize(base64_decode($profile->getField('programing'))))) ?  "selected" : "" ;  ?>>Scala</option>
                                </select>

                            </div>
                            <div class="form-group col-xs-4">
                                <label class="" for="CurrentPass"><?php _e('Networking'); ?></label>
                                <select multiple class="form-control" id="networking" name="networking[]">
                                    <option value='1' <?php echo (in_array('1', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>Wireless</option>
                                    <option value='2' <?php echo (in_array('1', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>Routing</option>
                                    <option value='3' <?php echo (in_array('1', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>Switching</option>                                                
                                    <option value='4' <?php echo (in_array('1', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>TCP/IP</option>
                                    <option value='5' <?php echo (in_array('1', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>Virtualization<option>
                                    <option value='6' <?php echo (in_array('1', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>DHCP</option>
                                    <option value='7' <?php echo (in_array('1', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>LDAP</option>
                                    <option value='8' <?php echo (in_array('1', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>Unix/Linux servers</option>
                                    <option value='9' <?php echo (in_array('1', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>Windows servers</option>                                                
                                </select>

                            </div>
                            <div class="form-group col-xs-4">
                                <label class="" for="CurrentPass"><?php _e('Web applications'); ?></label>
                                <select multiple class="form-control" id="webapplication" name="webapplication[]">
                                    <option value='1' <?php echo (in_array('1', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>PHP</option>
                                    <option value='2' <?php echo (in_array('2', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>Java</option>
                                    <option value='3' <?php echo (in_array('3', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>Python</option>
                                    <option value='3' <?php echo (in_array('4', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>Ruby</option>       
                                    <option value='4' <?php echo (in_array('5', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>SQL/MySql</option>
                                    <option value='5' <?php echo (in_array('6', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>Javascript</option>
                                    <option value='6' <?php echo (in_array('7', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>HTML4/HTML5</option>
                                    <option value='7' <?php echo (in_array('8', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>Joomla</option>
                                    <option value='8' <?php echo (in_array('9', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>Wordpress</option>
                                    <option value='9' <?php echo (in_array('10', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>Drupal</option>
                                    <option value='10' <?php echo (in_array('11', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>eCommerce</option>
                                </select>

                            </div>
                            <div class="form-group col-xs-4">
                                <label class="" for="CurrentPass"><?php _e('Business'); ?></label>
                                <select multiple class="form-control" id="business" name="business[]">
                                    <option value='1' <?php echo (in_array('1', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>PHP</option>
                                    <option value='2' <?php echo (in_array('2', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>Java</option>
                                    <option value='3' <?php echo (in_array('2', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>Python</option>
                                    <option value='3' <?php echo (in_array('3', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>Ruby</option>       
                                    <option value='4' <?php echo (in_array('4', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>SQL/MySql</option>
                                    <option value='5' <?php echo (in_array('5', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>Javascript</option>
                                    <option value='6' <?php echo (in_array('6', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>HTML4/HTML5</option>
                                    <option value='7' <?php echo (in_array('7', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>Joomla</option>
                                    <option value='8' <?php echo (in_array('8', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>Wordpress</option>
                                    <option value='9' <?php echo (in_array('9', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>Drupal</option>
                                    <option value='10' <?php echo (in_array('10', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>eCommerce</option>
                                </select>

                            </div>
                            <div class="form-group col-xs-4">
                                <label class="" for="CurrentPass"><?php _e('Professional'); ?></label>
                                <select multiple class="form-control" id="professional" name="professional[]">
                                    <option value='1' <?php echo (in_array('1', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>CIMA</option>
                                    <option value='2' <?php echo (in_array('2', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>CIM</option>
                                    <option value='3' <?php echo (in_array('3', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>Charted</option>
                                    <option value='3' <?php echo (in_array('4', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>AAT</option>       
                                    <option value='4' <?php echo (in_array('5', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>CCNA</option>
                                    <option value='5' <?php echo (in_array('6', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>CCNP</option>
                                    <option value='6' <?php echo (in_array('7', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>Java certification</option>
                                    <option value='7' <?php echo (in_array('8', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>Zend Certificate</option>
                                    <option value='8' <?php echo (in_array('9', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>Wordpress</option>
                                    <option value='9' <?php echo (in_array('10', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>Drupal</option>
                                    <option value='10' <?php echo (in_array('11', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>eCommerce</option>
                                </select>

                            </div>
                            <legend><?php _e('Projects'); ?></legend>
                            <div class="form-group col-xs-4">
                                <label class="" for="pname" ><?php _e('Project Name'); ?></label>

                                <input type="text" class="form-control" placeholder="" id="pname" name="pname" value="<?php echo $profile->getField('pname'); ?>">

                            </div>
                            <div class="form-group col-xs-4">
                                <label class="" for="pdescription" ><?php _e('Description'); ?></label>                                       

                                <textarea class="form-control" id="pdescription" name="pdescription" rows="5" autocomplete="off" ><?php echo $profile->getField('pdescription'); ?></textarea>

                            </div>
                            <div class="form-group col-xs-4">
                                <label class="" for="ptechnologies" ><?php _e('Technologies'); ?></label>

                                <textarea class="form-control" id="ptechnologies" name="ptechnologies" rows="5" autocomplete="off" ><?php echo $profile->getField('ptechnologies'); ?></textarea>

                            </div>
                            <div class="form-group col-xs-4">
                                <label class="" for="pclient" ><?php _e('Client'); ?></label>

                                <input type="text" class="form-control" placeholder="" id="name" name="pclient" value="<?php echo $profile->getField('pclient'); ?>">

                            </div>

                            <div class="form-group col-xs-4">
                                <label class="" for="pgroupmode"><?php _e('Group mode'); ?></label>
                                <div class=""> 
                                    <label class="checkbox-inline">
                                        <input type="radio" id="pgroupmodeyes" value="1" <?php echo ($profile->getField('pgroupmode')== '1') ?  "checked" : "" ;  ?> name='pgroupmode'/> Yes
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="radio" id="pgroupmodeno" value="2" <?php echo ($profile->getField('pgroupmode')== '2') ?  "checked" : "" ;  ?> name='pgroupmode'/> No
                                    </label>
                               
                                   
                                </div>
                            </div>

                            <div class="form-group col-xs-4">
                                <label class="" for="prole" ><?php _e('Role'); ?></label>

                                <input type="text" class="form-control" placeholder="" id="prole" name="prole" value="<?php echo $profile->getField('prole'); ?>">

                            </div>
                            <legend><?php _e('Attachments'); ?></legend> 
                             <div class="form-group col-xs-4">
                                <label class="" for="transcript" ><?php _e('Transcript'); ?></label>
                                <input type="file" class="form-control" placeholder="" id="transcript" name="transcript" value="">

                            </div>
                            
                            <div class="form-group col-xs-4">
                                <label class="" for="cv" ><?php _e('CV'); ?></label>
                                <input type="file" class="form-control" placeholder="" id="cv" name="cv" value="">

                            </div>
                            
                              <div class="form-group col-xs-4">
                                <label class="" for="pimage" ><?php _e('Image'); ?></label>
                                <input type="file" class="form-control" placeholder="" id="pimage" name="pimage" value="">

                            </div>
                            
                      
                    <?php }elseif(protectThis("2")){ ?>
                            <legend><?php _e('Other'); ?></legend>
                            <div class="form-group col-xs-4">
                                <label class="" for="qualification"><?php _e('Qualification');?></label>
                                <select multiple class="form-control" id="qualification" name="qualification[]">
                                    <option value='1' <?php echo (@in_array('1', unserialize(base64_decode($profile->getField('qualification'))))) ?  "selected" : "" ;  ?>>Professorship</option>
                                    <option value='2' <?php echo (@in_array('2', unserialize(base64_decode($profile->getField('qualification'))))) ?  "selected" : "" ;  ?>>Doctorate</option>
                                    <option value='3' <?php echo (@in_array('3', unserialize(base64_decode($profile->getField('qualification'))))) ?  "selected" : "" ;  ?>>MSc level</option>
                                    <option value='3' <?php echo (@in_array('4', unserialize(base64_decode($profile->getField('qualification'))))) ?  "selected" : "" ;  ?>>BSc level</option>       
                                    
                                </select>

                            </div>
                            <div class="form-group col-xs-4">
                                    <label class="" for="field"><?php _e('Teaching area');?></label>
                                <select multiple class="form-control" id="field" name="field[]">
                                    <option value='1' <?php echo (@in_array('1', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Programing</option>
                                    <option value='2' <?php echo (@in_array('2', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Networking</option>
                                    <option value='3' <?php echo (@in_array('3', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Web developments</option>
                                    <option value='3' <?php echo (@in_array('4', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Business </option>       
                                    <option value='3' <?php echo (@in_array('5', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Accounting </option> 
                                </select>

                            </div>
                            <legend><?php _e('Attachments'); ?></legend>
                            <div class="form-group col-xs-4">
                                <label class="" for="pimage" ><?php _e('Image'); ?></label>
                                <input type="file" class="form-control" placeholder="" id="pimage" name="pimage" value="">

                            </div>
                    <?php }elseif(protectThis("2")){ ?> 
                    <?php }elseif(protectThis("4")){ ?>    
                            
                    <?php if ($profile->getOption('profile-public-enable')) : ?>
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