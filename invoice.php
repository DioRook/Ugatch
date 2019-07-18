<?php
session_start();
print_r($_POST);
include("config/connection.php");
include("functions/mail.php");
include("functions/data.php");
$user=data_customer($db, $_POST['email']);
$body=print_r($_POST,TRUE)."\n".print_r($user,TRUE);
$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
/*$body="Details:".$_POST['str']."<br>DeliveryAt:".$_POST['delv'];
email($_POST['email'], "Order Details", $body);*/
print_r(mail("us@ugatch.com", "ORDER", $body,$headers));
$q="UPDATE customers SET cart='' WHERE email='$_SESSION[username]'";
	$r=mysqli_query($db,$q);
header("Location: home");
?>