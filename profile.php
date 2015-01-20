<?php include_once('classes/profile.class.php');?>
<?php include_once('classes/check.class.php');?>
<?php include_once('header.php');?>

<h1>

	<a href="http://localhost/pickme/" class="a-tooltip" data-rel="tooltip-bottom" title="<?php _e('Upload your image if you did not'); ?>">
                <?php if( $profile->getField('image')){ ?>
		<img class="gravatar  ownimage img-responsive img-thumbnail"  src="./uploads/images/<?php echo $profile->getField('image') ; ?>"/>
                <?php }else{ ?>
                <img class="gravatar  img-responsive img-thumbnail" src="<?php echo $profile->get_gravatar($profile->getField('email'), false, 54); ?>"/>
                <?php } ?>
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

                        <?php if(!protectThis("4")){?>       
                        <div class="form-group col-xs-4">
                            <label class="" for="name" ><?php _e('First Name'); ?></label>

                            <input type="text" class="form-control" placeholder="" id="name" name="name" value="<?php echo $profile->getField('name'); ?>">

                        </div>


                        <div class="form-group col-xs-4">
                            <label class="" for="lname"><?php _e('Last Name'); ?></label>

                            <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $profile->getField('lname'); ?>">

                        </div>
                        <?php }else{ ?>
                         <div class="form-group col-xs-4">
                            <label class="" for="name" ><?php _e('Company Name'); ?></label>

                            <input type="text" class="form-control" placeholder="" id="name" name="name" value="<?php echo $profile->getField('name'); ?>">

                        </div>
                        <?php }?>
                        <div class="form-group col-xs-4">
                            <label class="" for="email"><?php _e('Email'); ?></label>

                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $profile->getField('email'); ?>">

                        </div>
                        <div class="form-group col-xs-4 has-error">
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
                            <label class="" for="mobile"><?php _e('Telephone'); ?></label>

                            <input type="number"  autocomplete="off" class="form-control" id="mobile" name="mobile" placeholder="<?php _e('Mobile'); ?>" value="<?php echo $profile->getField('mobile'); ?>">

                        </div>
                        <?php  if( protectThis("4") ){  ?>
                        <div class="form-group col-xs-4">
                            <label class="" for="dob"><?php _e('Start Date'); ?></label>
                            <input type="date"   autocomplete="off" class="form-control" id="dob" name="dob" placeholder="" value="<?php echo $profile->getField('dob'); ?>">

                        </div>
                        <div class="form-group col-xs-4">
                            <label class="" for="description"><?php _e('Description'); ?></label>
                              <textarea class="form-control" id="description" name="description" rows="5" autocomplete="off" ><?php echo $profile->getField('description'); ?></textarea>

                        </div>
                        <?php  }else{  ?>
                        <div class="form-group col-xs-4">
                            <label class="" for="dob"><?php _e('Date of Birth'); ?></label>

                            <input type="date"   autocomplete="off" class="form-control" id="dob" name="dob" placeholder="<?php _e('Date of birth'); ?>" value="<?php echo $profile->getField('dob'); ?>">

                        </div>
                         <div class="form-group col-xs-4">
                                <label class="" for="sex"><?php _e('Gender'); ?></label>
                                <div class=""> 
                                    <label class="checkbox-inline">
                                        <input type="radio" id="Male" value="Male" <?php echo ($profile->getField('sex')== 'Male') ?  "checked" : "" ;  ?> name='sex'/> Male
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="radio" id="Female" value="Female" <?php echo ($profile->getField('sex')== 'Female') ?  "checked" : "" ;  ?> name='sex'/> Female
                                    </label>
                               
                                   
                                </div>
                            </div>
                        <?php } ?>
                        <?php  if( protectThis("3") ){  ?>

                            <legend><?php _e('Skill Set'); ?></legend>
                            <?php $profile->returnSkills(); ?>
                            <input type="hidden" name="categories" value="<?php echo $profile->returnSkillscat() ?>" />
                            <!--
                            <div class="form-group col-xs-4">
                               
                                <label class="" for="programing"><?php _e('Software programing');  
                               /// $data = ($profile->getField('programing'));
                             //  echo '<pre>'; print_r(unserialize(base64_decode($profile->getField('programing'))));
                                ?>
                                
                                </label>
                                <select multiple class="form-control" id="programing" name="programing[]">
                                    <option value='Java' <?php echo (in_array('Java', unserialize(base64_decode($profile->getField('programing'))))) ?  "selected" : "" ;  ?>>Java</option>
                                    <option value='.NET' <?php echo (in_array('.NET', unserialize(base64_decode($profile->getField('programing'))))) ?  "selected" : "" ;  ?>>.NET</option>
                                    <option value='C/C++' <?php echo (in_array('C/C++', unserialize(base64_decode($profile->getField('programing'))))) ?  "selected" : "" ;  ?>>C/C++</option>                                                
                                    <option value='Objective-C' <?php echo (in_array('Objective-C', unserialize(base64_decode($profile->getField('programing'))))) ?  "selected" : "" ;  ?>>Objective-C</option>
                                    <option value='Python' <?php echo (in_array('Python', unserialize(base64_decode($profile->getField('programing'))))) ?  "selected" : "" ;  ?>>Python</option>
                                    <option value='Scala' <?php echo (in_array('Scala', unserialize(base64_decode($profile->getField('programing'))))) ?  "selected" : "" ;  ?>>Scala</option>
                                </select>

                            </div>
                            <div class="form-group col-xs-4">
                                <label class="" for="CurrentPass"><?php _e('Networking'); ?></label>
                                <select multiple class="form-control" id="networking" name="networking[]">
                                    <option value='Wireless' <?php echo (in_array('Wireless', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>Wireless</option>
                                    <option value='Routing' <?php echo (in_array('Routing', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>Routing</option>
                                    <option value='Switching' <?php echo (in_array('Switching', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>Switching</option>                                                
                                    <option value='TCP/IP' <?php echo (in_array('TCP/IP', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>TCP/IP</option>
                                    <option value='Virtualization' <?php echo (in_array('Virtualization', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>Virtualization</option>
                                    
                                    <option value='DHCP' <?php echo (in_array('DHCP', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>DHCP</option>
                                    <option value='LDAP' <?php echo (in_array('LDAP', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>LDAP</option>
                                    <option value='Unix/Linux servers' <?php echo (in_array('Unix/Linux servers', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>Unix/Linux servers</option>
                                    <option value='Windows servers' <?php echo (in_array('9', unserialize(base64_decode($profile->getField('networking'))))) ?  "selected" : "" ;  ?>>Windows servers</option>                                                
                                </select>

                            </div>
                            <div class="form-group col-xs-4">
                                <label class="" for="CurrentPass"><?php _e('Web applications'); ?></label>
                                <select multiple class="form-control" id="webapplication" name="webapplication[]">
                                    <option value='PHP' <?php echo (in_array('PHP', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>PHP</option>
                                    <option value='Java' <?php echo (in_array('Java', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>Java</option>
                                    <option value='Python' <?php echo (in_array('Python', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>Python</option>
                                    <option value='Ruby' <?php echo (in_array('Ruby', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>Ruby</option>       
                                    <option value='SQL/MySql' <?php echo (in_array('SQL/MySql', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>SQL/MySql</option>
                                    <option value='Javascript' <?php echo (in_array('Javascript', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>Javascript</option>
                                    <option value='HTML4/HTML5' <?php echo (in_array('HTML4/HTML5', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>HTML4/HTML5</option>
                                    <option value='Joomla' <?php echo (in_array('Joomla', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>Joomla</option>
                                    <option value='Wordpress' <?php echo (in_array('Wordpress', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>Wordpress</option>
                                    <option value='Drupal' <?php echo (in_array('Drupal', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>Drupal</option>
                                    <option value='eCommerce' <?php echo (in_array('11', unserialize(base64_decode($profile->getField('webapplication'))))) ?  "selected" : "" ;  ?>>eCommerce</option>
                                </select>

                            </div>
                            <div class="form-group col-xs-4">
                                <label class="" for="CurrentPass"><?php _e('Business'); ?></label>
                                <select multiple class="form-control" id="business" name="business[]">
                                    <option value='Business process MGT' <?php echo (in_array('Business process MGT', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>Business process MGT</option>
                                    <option value='Information systems MGT' <?php echo (in_array('Information systems MGT', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>Information systems MGT</option>
                                    <option value='Marketing' <?php echo (in_array('Marketing', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>Marketing</option>
                                    <option value='Planning and monitoring' <?php echo (in_array('Planning and monitoring', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>Planning and monitoring</option>       
                                    <option value='Project MGT' <?php echo (in_array('Project MGT', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>Project MGT</option>
                                    <option value='Requirements analysis' <?php echo (in_array('Requirements analysis', unserialize(base64_decode($profile->getField('business'))))) ?  "selected" : "" ;  ?>>Requirements analysis</option>
                                   
                                </select>

                            </div>
                            <div class="form-group col-xs-4">
                                <label class="" for="CurrentPass"><?php _e('Professional'); ?></label>
                                <select multiple class="form-control" id="professional" name="professional[]">
                                    <option value='CIMA' <?php echo (in_array('CIMA', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>CIMA</option>
                                    <option value='CIM' <?php echo (in_array('CIM', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>CIM</option>
                                    <option value='Charted' <?php echo (in_array('Charted', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>Charted</option>
                                    <option value='AAT' <?php echo (in_array('AAT', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>AAT</option>       
                                    <option value='CCNA' <?php echo (in_array('CCNA', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>CCNA</option>
                                    <option value='CCNP' <?php echo (in_array('CCNP', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>CCNP</option>
                                    <option value='Java certification' <?php echo (in_array('Java certification', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>Java certification</option>
                                    <option value='Zend Certificate' <?php echo (in_array('8', unserialize(base64_decode($profile->getField('professional'))))) ?  "selected" : "" ;  ?>>Zend Certificate</option>
                                  
                                </select>

                            </div>
                            
                            -->
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
                                    <option value='Professorship' <?php echo (@in_array('Professorship', unserialize(base64_decode($profile->getField('qualification'))))) ?  "selected" : "" ;  ?>>Professorship</option>
                                    <option value='Doctorate' <?php echo (@in_array('Doctorate', unserialize(base64_decode($profile->getField('qualification'))))) ?  "selected" : "" ;  ?>>Doctorate</option>
                                    <option value='MSc level' <?php echo (@in_array('MSc level', unserialize(base64_decode($profile->getField('qualification'))))) ?  "selected" : "" ;  ?>>MSc level</option>
                                    <option value='BSc level' <?php echo (@in_array('4', unserialize(base64_decode($profile->getField('qualification'))))) ?  "selected" : "" ;  ?>>BSc level</option>       
                                    
                                </select>

                            </div>
                            <div class="form-group col-xs-4">
                                    <label class="" for="field"><?php _e('Teaching area');?></label>
                                <select multiple class="form-control" id="field" name="field[]">
                                    <option value='Programing' <?php echo (@in_array('Programing', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Programing</option>
                                    <option value='Networking' <?php echo (@in_array('Networking', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Networking</option>
                                    <option value='Web developments' <?php echo (@in_array('Web developments', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Web developments</option>
                                    <option value='Business' <?php echo (@in_array('Business', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Business</option>       
                                    <option value='Accounting' <?php echo (@in_array('Accounting', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Accounting</option> 
                                </select>

                            </div>
                            <legend><?php _e('Attachments'); ?></legend>
                            <div class="form-group col-xs-4">
                                <label class="" for="pimage" ><?php _e('Image'); ?></label>
                                <input type="file" class="form-control" placeholder="" id="pimage" name="pimage" value="">

                            </div>     
                            
                    <?php }elseif(protectThis("4")){ ?>  
                            <legend><?php _e('Other'); ?></legend>
                            
                           
                             <div class="form-group col-xs-4">
                                    <label class="" for="field"><?php _e('Technologies');?></label>
                                <select multiple class="form-control" id="field" name="field[]">
                                    <option value='Software Programing' <?php echo (@in_array('Software Programing', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Software Programing</option>
                                    <option value='Networking' <?php echo (@in_array('Networking', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Networking</option>
                                    <option value='Web developments' <?php echo (@in_array('Web developments', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Web developments</option>
                                    <option value='Business' <?php echo (@in_array('Business', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Business </option>       
                                    <option value='Accounting' <?php echo (@in_array('Accounting', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Accounting </option> 
                                    <option value='Education' <?php echo (@in_array('Education', unserialize(base64_decode($profile->getField('field'))))) ?  "selected" : "" ;  ?>>Education </option> 
                                </select>

                            </div>
                             <div class="form-group col-xs-4">
                                    <label class="" for="type"><?php _e('Type');echo $profile->getField('type');?></label>
                                <select  class="form-control" id="type" name="type">
                                    <option value='Government' <?php echo ($profile->getField('type') == 'Government'  ? "selected" : "") ?>>Government</option>
                                    <option value='Private' <?php echo ($profile->getField('type') == 'Private'  ? "selected" : "") ?>>Private</option>
                                    <option value='Semi government' <?php echo ($profile->getField('type') == 'Semi government'  ? "selected" : "") ?>>Semi government</option>
                                    <option value='Multi national' <?php echo ($profile->getField('type') == 'Multi national'  ? "selected" : "") ?>>Multi national</option>
                                </select>

                            </div>
                            <div class="form-group col-xs-4">
                                    <label class="" for="city"><?php _e('City');?></label>
                                <select  class="form-control" id="city" name="city">
                                    <option value='Colombo' <?php echo ($profile->getField('city') == 'Colombo ' ? "selected" : "") ?>>Colombo</option>
                                    <option value='Kandy' <?php echo ($profile->getField('city') == 'Kandy'  ? "selected" : "") ?>>Kandy</option>
                                    <option value='Kurunegala' <?php echo ($profile->getField('city') == 'Kurunegala'  ? "selected" : "") ?>>Kurunegala</option>
                                    <option value='Galle' <?php echo ($profile->getField('city') == 'Galle'  ? "selected" : "") ?>>Galle</option>
                                    <option value='Matara' <?php echo ($profile->getField('city') == 'Matara'  ? "selected" : "") ?>>Matara</option>
                                </select>

                            </div>
                             <legend><?php _e('Attachments'); ?></legend>
                            <div class="form-group col-xs-4">
                                <label class="" for="pimage" ><?php _e('Image'); ?></label>
                                <input type="file" class="form-control" placeholder="" id="pimage" name="pimage" value="">

                            </div> 
                            
                     <?php } ?>            
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