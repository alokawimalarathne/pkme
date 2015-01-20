<?php
include_once('classes/check.class.php');
include_once('admin/classes/functions.php');
include_once ('header.php');

protect('*');
if(isset($_GET['id'])){
$uid = $_GET['id']; 
}else{
    
}

$level = min(get_level($uid));

//print_r($_SESSION['pickme']['user_level']);

$profile = get_image($uid, $level);
//echo '<pre>';print_r($skills );echo '</pre>';
?>
<div class="container">
    <div>

        <div class="page">
            <div class="row">
                <?php if ($level == 3){ ?>
                <div class="col-md-12">

                    <div class="bg-info ">
                        <div class="news-overflow news-profile">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <div class="col-md-12" style="margin-left: 15px;"><legend>News</legend></div>
                            <?php get_news() ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="profile-left ">
                        <legend>Settings</legend>
                        
                        <?php if($uid == $_SESSION['pickme']['user_id']){ ?>
                        <div>Messages</div>
                        <?php }else{ ?>
                        <div>Send Message</div>
                        <?php } ?>
                        <div>Recommendations</div>
                        <div>Endorsing Points</div>
                        <?php if($uid == $_SESSION['pickme']['user_id']){ ?>
                        <div><a  href='./profile.php<?php  ?>'>Edit profile</a></div>
                      <?php } ?>
                        <div><a target='_blank' href='./uploads/cvs/<?php echo $profile['cv'] ?>'>Download CV</a></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile-left">
                        
                        
                        <div class="col-md-8">
                            <div>
                                
                                <div><legend>Genaral</legend>Name</div>
                                <div class="pro-details"><?php echo $profile['name'].' '.$profile['lname'];?></div>
                                <div>Email</div>
                                <div class="pro-details"><?php echo $profile['email'];?></div>
                                <div>Mobile/Telephone</div>
                                <div class="pro-details"><?php echo $profile['mobile'];?></div>
                                <div>Date of Birth</div>
                                <div class="pro-details"><?php echo $profile['dob'];?></div>
                                <div>Sex</div>
                                <div class="pro-details"><?php echo $profile['sex'];?></div>
                                
                                <legend>Skills</legend>
                                <?php get_skills($uid); ?>
                                
                                
                                
                                <div><legend>Projects</legend></div>
                                <?php $projects= get_projects($uid);// echo '<pre>';print_r($projects);?>
                                <div>Name</div>
                                <div class="pro-details"><?php echo $projects['pname'];?></div>
                                <div>Description</div>
                                <div class="pro-details"><?php echo $projects['pdescription'];?></div>
                                <div>Technologies</div>
                                <div class="pro-details"><?php echo $projects['ptechnologies'];?></div>
                                <div>Client</div>
                                <div class="pro-details"><?php echo $projects['pclient'];?></div>
                                <div>Groupmode</div>
                                <div class="pro-details"><?php if( $projects['pgroupmode'] == 1){
                                    echo 'Yes';
                                    
                                }else{
                                    echo 'No';
                                } ?></div>
                                <div>Role</div>
                                <div class="pro-details"><?php echo $projects['prole'];?></div>
                                
                            </div>
                        </div>
                        <?php if($profile['image']){ ?>
                         <div class="col-md-4"><img class="img-responsive img-thumbnail" src="./uploads/images/<?php echo $profile['image'];?> "/></div>
                        <?php }else{ ?>
                         <div class="col-md-4"><img class="img-responsive img-thumbnail" src="./uploads/images/default.jpg"/></div>
                        <?php } ?>
                    </div>
                    </div>

                </div>
                    <?php }elseif($level==2){ ?>
                <div class="col-md-12">

                    <div class="bg-info ">
                        <div class="news-overflow news-profile">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <div class="col-md-12" style="margin-left: 15px;"><legend>News</legend></div>
                            <?php get_news() ?>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="profile-left ">
                        <legend>Settings</legend>
                        <div>Messages</div>
                        <div>Endorse Requests</div>                       
                        <div>Edit profile</div>
                       
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile-left">
                        <div class="col-md-8">
                             <div><legend>Genaral</legend>Name</div>
                                <div class="pro-details"><?php echo $profile['name'].' '.$profile['lname'];?></div>
                                <div>Email</div>
                                <div class="pro-details"><?php echo $profile['email'];?></div>
                                <div>Mobile/Telephone</div>
                                <div class="pro-details"><?php echo $profile['mobile'];?></div>
                                <div>Date of Birth</div>
                                <div class="pro-details"><?php echo $profile['dob'];?></div>
                                <div>Sex</div>
                                <div class="pro-details"><?php echo $profile['sex'];?></div>
                                                      
                                <?php if($profile['qualification']){  ?>
                                <div>Qualifications</div>
                                <div class="pro-details"><?php  $qualification = @unserialize(base64_decode($profile['qualification']));//echo '<pre>';print_r($programing) ;
                                echo implode(", ",$qualification);?></div>
                                <?php } ?>
                                
                                 <?php if($profile['field']){  ?>
                                <div>Field</div>
                                <div class="pro-details"><?php  $field = @unserialize(base64_decode($profile['field']));//echo '<pre>';print_r($programing) ;
                                echo implode(", ",$field);?></div>
                                <?php } ?>
                        </div>
                        <?php if($profile['image']){ ?>
                         <div class="col-md-4"><img class="img-responsive img-thumbnail" src="./uploads/images/<?php echo $profile['image'];?> "/></div>
                        <?php }else{ ?>
                         <div class="col-md-4"><img class="img-responsive img-thumbnail" src="./uploads/images/default.jpg"/></div>
                        <?php } ?>
                </div>
                
                        
                        
                       
                <?php }elseif($level==4){ ?>
                  <div class="col-md-12">

                    <div class="bg-info ">
                        <div class="news-overflow news-profile">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <div class="col-md-12" style="margin-left: 15px;"><legend>News</legend></div>
                            <?php get_news() ?>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="profile-left ">
                        <legend>Settings</legend>
                                         
                        <div>Edit profile</div>
                       
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile-left">
                        <div class="col-md-8">
                             <div><legend>Genaral</legend>Name</div>
                                <div class="pro-details"><?php echo $profile['name'].' '.$profile['lname'];?></div>
                                <div>Email</div>
                                <div class="pro-details"><?php echo $profile['email'];?></div>
                                <div>Mobile/Telephone</div>
                                <div class="pro-details"><?php echo $profile['mobile'];?></div>
                                <div>Start Date/dt>
                                <div class="pro-details"><?php echo $profile['dob'];?></div>                                
                                                      
                                <?php if($profile['field']){  ?>
                                <div>Technologies</div>
                                <div class="pro-details"><?php  $field = @unserialize(base64_decode($profile['field']));//echo '<pre>';print_r($programing) ;
                                echo implode(", ",$field);?></div>
                                <?php } ?>
                                
                                 <?php if($profile['description']){  ?>
                                <div>Field</div>
                                <div><?php  $description= $profile['description'];//echo '<pre>';print_r($programing) ;
                                echo $description;?></div>
                                <?php } ?>
                        </div>
                         <?php if($profile['image']){ ?>
                         <div class="col-md-4"><img class="img-responsive img-thumbnail" src="./uploads/images/<?php echo $profile['image'];?> "/></div>
                        <?php }else{ ?>
                         <div class="col-md-4"><img class="img-responsive img-thumbnail" src="./uploads/images/default.jpg"/></div>
                        <?php } ?>
                </div>      
                <?php }else{  ?>
                This is admin profile page;
                <?php  } ?>
            </div>
            
        </div>

    </div>

</div>                 

<?php include ('footer.php'); ?>