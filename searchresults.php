<?php
include_once('classes/check.class.php');
include_once('admin/classes/functions.php');
//print_r( $_POST['fsearch'] );
if (isset($_POST['fsearch'])) {
    if (empty($_POST['fsearch'])) {
        echo "Please enter key word to search";
    } else {
        $query = $_POST['fsearch'];
        if(!protectThis('*')){
 ?>
<div class="alert alert-warning alert-dismissible fade in" style="margin: 10px 0;"role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      In order to view full profiles, you <strong> must be </strong> signed in !.
    </div>
 <?php 
        }
        get_search_results($query);
    }
}
