<?php
session_start();
if(!isset($_SESSION['admin'])){
	header('Location: login.php');
}
?>

<?php include ('config/setup.php');?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo 'Admin'.' | '.$title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<?php include ('config/css.php');?>
		<?php include ('config/js.php');?>

	</head>
	<body>
		<main role="main">

		<?php include ('templates/navigation.php');?>