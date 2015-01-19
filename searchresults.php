<?php
include_once('classes/check.class.php');
include_once('admin/classes/functions.php');
//print_r( $_POST['fsearch'] );
if (isset($_POST['fsearch'])) {
    if (empty($_POST['fsearch'])) {
        echo "Please enter key word to search";
    } else {
        $query = $_POST['fsearch'];
        $results = get_search_results($query);echo "<pre>";print_r($results);
    }
}
