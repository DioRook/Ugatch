<?php
session_start();
include('functions/mail.php');
include("config/connection.php");

$q="SELECT * FROM customers WHERE email='$_SESSION[username]'";
$r=mysqli_query($db,$q);
$list=mysqli_fetch_assoc($r);
$body='Click The Link To Activate Your Accout<br> <a href="http://ugatch.com/activate.php?email='.$_SESSION['username'].'">http://ugatch.com/actiavte</a>';
$var=email($list['email'],"Activation Link",$body);
mail('us@ugatch.com',"Activation Link",$body,"FROM: Ugatch.com");
if($r){
	echo "done".$var;
	//header("Location: home ");
}else{
	echo mysqli_error($db)."<br>".$q;
}

?>