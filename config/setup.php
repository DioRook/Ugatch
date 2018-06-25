<?php
error_reporting(0);
#Setup file:
#database..
include ('config/connection.php');
#constant..
define('D_TEMP', 'templates');
define('D_VIEW', 'views');

#functions..
include('functions/sandbox.php');
include('functions/data.php');
include('functions/template.php');

#setting
$debug=data_setting_val($db, 'debug');
$path=get_path();

$title='Ugatch';
$ac=" active";
if(!isset($path['call_parts'][0]) || $path['call_parts'][0]==''){
	//$pageid=$_GET['page'];//page from url "?page="..
	//$path['call_parts'][0]='home';
	header('Location: home');
}/*
else{
	$pageid='home';//set page =1
}*/
#page setup
$page=data_posts($db, $path['call_parts'][0]);
$views=data_post_type($db, $page['type']);

?>