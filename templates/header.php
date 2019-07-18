<?php
session_start();
?>
<?php include ('config/setup.php');
	visits($db);
if(!isset($path['call_parts'][0]) || $path['call_parts'][0]==''){
	//$pageid=$_GET['page'];//page from url "?page="..
	//$path['call_parts'][0]='home';
	header('Location: home');
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page['title'].' | '.$title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Ugatch is a place to find any and everything related to studies education exams. Ugatch ugatch is a place for students">
		<meta charset="utf-8">
		<link rel="shortcut icon" href="images/u.png" />
		<?php include ('config/css.php');?>
		<?php include ('config/js.php');?>

	</head>
	<body>
		<main class="main" role="main"><!-- 
		<div class="jumbotron" style="margin-bottom: 0px;">
			<h1>Ugatch</h1>
			<p>Where Passion meets Education.</p>
		</div> -->
		
		<?php include (D_TEMP.'/navigation.php');?>
		<?php 
		if(isset($_SESSION['username'])){
		if($customer['active']==0){
			//echo '<p class="alert alert-danger">Account Not Activated  <a href="http://ugatch.com/activation.php?email='.$customer['email'].'">activation link</a></p>';
			echo '<p class="alert alert-danger">We are Verifing your Account. This may take sometime.</p>';
		}
		}
		?>