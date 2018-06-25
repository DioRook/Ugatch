<?php
error_reporting(0);
#Setup file:
#database..
include ('../config/connection.php');
#constant..
define('D_TEMP', 'templates');

#functions..
include('functions/data.php');
include('functions/template.php');
include('functions/sandbox.php');
#setting
$debug=data_setting_val($db, 'debug');

$title='Ugatch';
$ac=" active";
if(isset($_GET['page'])){
	$page=$_GET['page'];//page from url "?page="..
}
else{
	$page='dashboard';//set page =1
}
#page setup
include ('config/queries.php');
//$page=data_page($db, $pageid);



$user=data_user($db, $_SESSION['username']);
?>