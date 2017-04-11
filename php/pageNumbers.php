<?php
include("../config30nights.php");

$results = mysql_query("SELECT COUNT(*) FROM `poems` WHERE authorized=1", $dbhandle);
$get_total_rows = mysql_fetch_array($results); //total records

$item_per_page = 4;

//break total records into pages
$total_pages = ceil($get_total_rows[0]/$item_per_page); 
?>