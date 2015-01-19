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

$profile = get_image($uid, $level);//echo '<pre>';print_r($profile );echo '</pre>';
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
                        <div>Messages</div>
                        <div>Recommendations</div>
                        <div>Endorsing Points</div>
                        <div>Edit profile</div>
                        <div>Download CV</div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile-left">
                        
                        
                        <div class="col-md-8">
                            <dl>
                                
                                <dt><legend>Genaral</legend>Name</dt>
                                <dd><?php echo $profile['name'].' '.$profile['lname'];?></dd>
                                <dt>Email</dt>
                                <dd><?php echo $profile['email'];?></dd>
                                <dt>Mobile/Telephone</dt>
                                <dd><?php echo $profile['mobile'];?></dd>
                                <dt>Date of Birth</dt>
                                <dd><?php echo $profile['dob'];?></dd>
                                <dt>Sex</dt>
                                <dd><?php echo $profile['sex'];?></dd>
                                
                                <dt><legend>Skills</legend></dt>                                
                                <?php if($profile['programing']){  ?>
                                <dt>Programing</dt>
                                <dd><?php  $programing = @unserialize(base64_decode($profile['programing']));//echo '<pre>';print_r($programing) ;
                                echo implode(", ",$programing);?></dd>
                                <?php } ?>
                                <?php if($profile['networking']){  ?>
                                <dt>networking</dt>
                                <dd><?php  $programing = @unserialize(base64_decode($profile['networking']));//echo '<pre>';print_r($programing) ;
                                echo implode(", ",$programing);?></dd>
                                 <?php } ?>
                                <?php if($profile['webapplication']){  ?>
                                <dt>webapplication</dt>
                                <dd><?php  $programing = @unserialize(base64_decode($profile['webapplication']));//echo '<pre>';print_r($programing) ;
                                echo implode(", ",$programing);?></dd>
                                 <?php } ?>
                                <?php if($profile['business']){  ?>
                                <dt>business</dt>
                                <dd><?php  $programing = @unserialize(base64_decode($profile['business']));//echo '<pre>';print_r($programing) ;
                                echo implode(", ",$programing);?></dd>
                                 <?php } ?>
                                <?php if($profile['professional']){  ?>
                                <dt>professional</dt>
                                <dd><?php  $programing = @unserialize(base64_decode($profile['professional']));//echo '<pre>';print_r($programing) ;
                                echo implode(", ",$programing);?></dd>
                                 <?php } ?>
                                
                                
                                <dt><legend>Projects</legend></dt>
                                <dt>Name</dt>
                                <dd><?php echo $profile['pname'];?></dd>
                                <dt>Description</dt>
                                <dd><?php echo $profile['pdescription'];?></dd>
                                <dt>Technologies</dt>
                                <dd><?php echo $profile['ptechnologies'];?></dd>
                                <dt>Client</dt>
                                <dd><?php echo $profile['pclient'];?></dd>
                                <dt>Groupmode</dt>
                                <dd><?php if( $profile['pgroupmode'] == 1){
                                    echo 'Yes';
                                    
                                }else{
                                    echo 'No';
                                } ?></dd>
                                <dt>Role</dt>
                                <dd><?php echo $profile['prole'];?></dd>
                                
                            </dl>
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
                             <dt><legend>Genaral</legend>Name</dt>
                                <dd><?php echo $profile['name'].' '.$profile['lname'];?></dd>
                                <dt>Email</dt>
                                <dd><?php echo $profile['email'];?></dd>
                                <dt>Mobile/Telephone</dt>
                                <dd><?php echo $profile['mobile'];?></dd>
                                <dt>Date of Birth</dt>
                                <dd><?php echo $profile['dob'];?></dd>
                                <dt>Sex</dt>
                                <dd><?php echo $profile['sex'];?></dd>
                                                      
                                <?php if($profile['qualification']){  ?>
                                <dt>Qualifications</dt>
                                <dd><?php  $qualification = @unserialize(base64_decode($profile['qualification']));//echo '<pre>';print_r($programing) ;
                                echo implode(", ",$qualification);?></dd>
                                <?php } ?>
                                
                                 <?php if($profile['field']){  ?>
                                <dt>Field</dt>
                                <dd><?php  $field = @unserialize(base64_decode($profile['field']));//echo '<pre>';print_r($programing) ;
                                echo implode(", ",$field);?></dd>
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
                             <dt><legend>Genaral</legend>Name</dt>
                                <dd><?php echo $profile['name'].' '.$profile['lname'];?></dd>
                                <dt>Email</dt>
                                <dd><?php echo $profile['email'];?></dd>
                                <dt>Mobile/Telephone</dt>
                                <dd><?php echo $profile['mobile'];?></dd>
                                <dt>Start Date/dt>
                                <dd><?php echo $profile['dob'];?></dd>                                
                                                      
                                <?php if($profile['field']){  ?>
                                <dt>Qualifications</dt>
                                <dd><?php  $field = @unserialize(base64_decode($profile['field']));//echo '<pre>';print_r($programing) ;
                                echo implode(", ",$field);?></dd>
                                <?php } ?>
                                
                                 <?php if($profile['description']){  ?>
                                <dt>Field</dt>
                                <dd><?php  $description= $profile['description'];//echo '<pre>';print_r($programing) ;
                                echo $description;?></dd>
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