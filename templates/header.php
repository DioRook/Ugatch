<?php 
session_start();
?>
<?php include ('config/setup.php');?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page['title'].' | '.$title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<?php include ('config/css.php');?>
		<?php include ('config/js.php');?>

	</head>
	<body>
		<main role="main">

		<?php include (D_TEMP.'/navigation.php');?>