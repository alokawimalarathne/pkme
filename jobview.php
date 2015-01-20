<?php
include_once('classes/check.class.php');
include_once('admin/classes/functions.php');
include_once ('header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo 'You are missing article ID';
}
$job = get_job($id);
//print_r(get_article($id));
?>

<div class="container">
    <div>

        <div class="page">
            <div class="row">
                <div class="col-md-12">

                    <div class="bg-info ">
                        <div class="news-overflow news-profile">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <div class="col-md-12" style="margin-left: 15px;"><legend>Jobs</legend></div>
                            <?php get_jobs() ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    
                    <div class="col-md-10">
                        <div class="article-view">
                            <div class="article-name">
                                <h2>
                                    <a href="./jobview.php?id=<?php echo $job['id'] ?>"/>
                                    <?php echo $job['name'] ?></a>
                                </h2>
                            </div>
                            <div class="article-date pdate">
                                 <?php echo date('Y-m-d H:i:s', $job['date'])  ?>
                            </div>
                            <div class="article-content">
                                <legend>Description</legend>
                                 <?php echo $job['description'] ?>
                            </div>
                            
                            <div class="article-content"> 
                                <b>Salary: </b> 
                                 <?php echo $job['salary'] ?>
                            </div>
                            <div class="article-content">
                                <b> Experience: </b> 
                                 <?php echo $job['experience'] ?>
                            </div>
                            <div class="article-content">  
                                <b> Period: </b> 
                                 <?php echo $job['period'] ?>
                            </div>
                            <div class="article-content">                                
                               <b>  City: </b> 
                                 <?php echo $job['city'] ?>
                            </div>
                            <div class="article-content">
                               <b>  E-mail: </b> 
                                 <?php echo $job['email'] ?>
                            </div>
                            <div class="article-content"> 
                              <b>  Telephone: </b>  
                                 <?php echo $job['mobile'] ?>
                            </div>
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ('footer.php'); ?>