<?php include_once('header.php'); ?>  
<div class="row">
	<div id="content">
		<div class="article">	
			<h2><span><a href="contact_us.php">Contact Us</a></span></h2>
			<hr class="noscreen" />
				<div class="span6">
					<img src="images/group.png">
					<hr class="noscreen" />
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><img src="images/ico_archive2.gif" alt="" width="9" height="11" /></td>
							<td><strong>Name :</strong> B.M.A.P.Wimalarathna</td>
						</tr>
						<tr>
							<td><img src="images/ico_archive2.gif" alt="" width="9" height="11" /></td>
							<td><strong>Mobile:</strong> 0776790057</td>
						</tr>
						<tr>
							<td><img src="images/ico_archive2.gif" alt="" width="9" height="11" /></td>
							<td><strong>Email :</strong><a href="#"><span>  alokawimalarathne@gmail.com</span></a> </td>
						</tr>
						<tr>
							<td><img src="images/ico_archive2.gif" alt="" width="9" height="11" /></td>
							<td><strong>Website:</strong></td>
						</tr>
					</table>
				</div>   
        </div>
    </div>
	<div class="span6">
			<div id="content">
				<div class="article">
					<h4><span>Send us</span> mail</h4>
					<hr class="noscreen" />
						<div class="clr"></div>
							<form action="#" method="post" id="sendemail">
								<ul>
								  <li>
									<label for="name">Name</label>
									<input id="name" name="name" class="text" />
								  </li>
								  <li>
									<label for="email">Email</label>
									<input id="email" name="email" class="text" />
								  </li>
								  <li>
									<label for="website">Website</label>
									<input id="website" name="website" class="text" />
								  </li>
								  <li>
									<label for="message">Your Message</label>
									<textarea id="message" name="message" rows="8" cols="50"></textarea>
								  </li>
								</ul>
								<button type="submit" class="btn btn-primary"><?php _e('submit'); ?></button>
							</form>
				</div>
			</div>
	</div>
</div>


<?php include_once('footer.php'); ?>