<?php
include_once('classes/check.class.php');
include_once('admin/classes/functions.php');
include_once ('header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo 'You are missing article ID';
}
$article = get_article($id);
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
                            <div class="col-md-12" style="margin-left: 15px;"><legend>News</legend></div>
                            <?php get_news() ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    
                    <div class="col-md-10">
                        <div class="article-view">
                            <div class="article-name">
                                <h2>
                                    <a href="./articleview.php?id=<?php echo $article['id'] ?>"/>
                                    <?php echo $article['name'] ?></a>
                                </h2>
                            </div>
                            <div class="article-date pdate">
                                 <?php echo date('Y-m-d H:i:s', $article['date']). ' | '. $article['category']  ?>
                            </div>
                            <div class="article-content">
                                 <?php echo $article['content'] ?>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ('footer.php'); ?>