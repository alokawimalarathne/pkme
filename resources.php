<?php 
include_once('classes/check.class.php');
include_once('admin/classes/functions.php');
include_once('header.php'); 

?>

<div class="container">
    <div>

        <div class="page">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                    <h2><a href="resources.php">Resources</a></h2>
                    </div>
                     <div class="col-md-2">
                    
                    <img class="img-thumbnail" src="images/jobseeking.jpg">
                     </div>
                    <div class="col-md-5">
                        <legend>News</legend>
                   <?php echo get_resources('news');?>
                     </div>
                    <div class="col-md-5">
                    <legend>Resources</legend>
                    <?php echo get_resources('resources');?>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include_once('footer.php'); ?>