<?php include_once('header.php'); 




if (isset($_POST["submit"])) {
// Checking For Blank Fields..
    if ($_POST["InputName"] == "" || $_POST["InputEmail"] == "" || $_POST["InputMessage"] == "") {
        echo "Fill All Fields..";
    } else {
// Check if the "Sender's Email" input field is filled out
        $email = $_POST['InputEmail'];
// Sanitize E-mail Address
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email) {
            echo "Invalid Sender's Email";
        } else {
            $subject = "PICKME contact us";
            $message = $_POST['InputMessage'];
            $headers = 'From:' . $email . "\r\n"; // Sender's Email
            $headers .= 'Cc:' . $email . "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 100 characters (PHP rule), so wrap it
            $message = wordwrap($message, 100);
// Send Mail By PHP Mail Function
            if(mail("aloka.wimalarathne@gmail.com", $subject, $message, $headers)){
            echo "<div class='alert alert-success'>Your mail has been sent successfuly ! Thank you for your feedback</div>";
            }
        }
    }
}
?>  
<div class="">
    <div id="content">
        <div class="article">	
            <h2><span><a href="contact_us.php">Contact Us</a></span></h2>
            <!--   <hr class="noscreen" />   -->
            <br/>
            <div ><iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=University%20of%20Colombo%20School%20of%20Computing%2C%20Colombo%2C%20Western%20Province%2C%20Sri%20Lanka&key=AIzaSyC7FtVIWWHpI3jJsrT70EznKHt5cIrC-LI"></iframe></div>
            <div class="clr"></div>
            
            <div class="col-md-4">
                <img  class="img-thumbnail"  src="images/contactus.png">
                <!--          <hr class="noscreen" />  -->
                <address>
                    <h2>Office Location</h2>
                    <p>
                        <b>Telephone:</b> 0094-112-581245<br />
                        <b>Fax:</b> 0094-112-2587239<br />
                        <b>Address:</b> Professional Development Center, University of Colombo School of Computing,35, Philip Gunewardena Mawatha, Colombo 7,
                        SRI LANKA<br />
                        <b>Email:</b> <a mailto:info@pickme.ucsc.ac.lk>info@pickme.ucsc.ac.lk</a>
                    </p>
                </address>

            </div>   
            <div class="col-md-2 mid"></div>
            
            <div class="col-md-6">
        <div id="content">
            <div class="article">
                <br />
                <h3>Write to us</h3>
                <hr class="noscreen" />
                <div class="clr"></div>
                <form role="form" action="" method="post" class="form-horizontal" action="contact_us.php">
    <div class="">
  
      <div class="form-group">
        <label for="InputName">Your Name</label>
        <div class="input-group">
          <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required="">
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="InputEmail">Your Email</label>
        <div class="input-group">
          <input type="email" class="form-control input-normal" id="InputEmail" name="InputEmail" placeholder="Enter Email" required="">
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="InputMessage">Message</label>
        <div class="input-group">
          <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required=""></textarea>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
        <div class="form-group">
            <label for="InputMessage"></label>
            <div class="input-group">
                <input type="button" name="submit" id="submit" value="<?php _e('cancel'); ?>" class="btn btn-info" /> &nbsp;
                <input type="submit" name="submit" id="submit" value="<?php _e('submit'); ?>" class="btn btn-info" />

            </div> 
        </div>
    </div>
  </form>
               
            </div>
        </div>
            </div>
        </div>
</div>
          
        </div>
<?php include_once('footer.php'); ?>