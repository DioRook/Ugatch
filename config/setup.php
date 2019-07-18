<?php
//error_reporting(0);

	error_reporting(0);
#Setup file:
#database..
include ('config/connection.php');
#constant..
define('D_TEMP', 'templates');
define('D_VIEW', 'views');
define('RS', '₹');


#PHP Mailer




#functions..
include('functions/sandbox.php');
include('functions/data.php');
include('functions/template.php');
include('functions/mail.php');
#setting
$debug=data_setting_val($db, 'debug');
$path=get_path();

$title='Ugatch';
$ac=" active";
/*
else{
	$pageid='home';//set page =1
}*/
#page setup
$page=data_posts($db, $path['call_parts'][0]);
$views=data_post_type($db, $page['type']);
$customer=data_customer($db, $_SESSION['username']);





?>