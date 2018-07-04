<?php
session_start();
include('functions/mail.php');
include("config/connection.php");

$q="SELECT * FROM customers WHERE email='$_SESSION[username]'";
$r=mysqli_query($db,$q);
$list=mysqli_fetch_assoc($r);
$body='Click The Link To Activate Your Accout<br> <a href="http://localhost/ugatch/web/UgatchWeb/activate.php?email='.$_SESSION['username'].'">http://localhost/ugatch/web/UgatchWeb/actiavte</a>';
email($list['email'],$body);
if($r){
	echo "done";
	header("Location: home ");
}else{
	echo mysqli_error($db)."<br>".$q;
}

?>