<?php include_once('header.php'); ?>

	<div class="row">
            <div class="span6">
                Registered Users goes here....
				<br/><br/><br/>
				<img src="images/slide1.jpg"/>
            </div>
            <div class="span6">
                <?php if(isset($_SESSION['pickme']['username'])) {  ?>
                <div> <?php _e('Welcome , '); echo $_SESSION['pickme']['username']; ?>
					<?php }else{ ?>
					<div id="forgot-form" class="modal hide fade">
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
			</div>
			<hr>
<div class="features">
	<div class="row">
		
	</div>

	<br><br><hr>

	<div class="demo features">
		<div class="row">
			Advanced Search....
			<br/><br/>
			<div class="controls">
				<div class="input-prepend">
					<input class="span2" style="margin:0" id="username-search" type="text" name="searchUsers" onkeyup="searchSuggest(event);" placeholder="<?php _e('Search'); ?>">
					<span class="add-on">
					<label for="username-search"><a href="#" data-rel="tooltip-bottom" title="<?php _e('Search by Name'); ?>"><i class="icon-search"></i></a></label>
					</span>
				</div>
			</div>	
		</div>
		<br/><hr><br/>
		
	</div>


<?php include_once('footer.php'); ?>