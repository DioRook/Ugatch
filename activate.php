<?php
include("config/connection.php");
$user=$_GET['email'];
$q="UPDATE customers SET active = 1 WHERE email='$user'";
$r=mysqli_query($db,$q);
$list=mysqli_fetch_assoc($q);
if($r){
	echo "done"."<br>".$q;
	header("Location: home ");
}else{
	echo mysqli_error($db)."<br>".$q;
}



?>