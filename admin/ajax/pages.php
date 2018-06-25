<?php
include("../../config/connection.php");
$id=$_GET['id'];

$q="DELETE FROM posts WHERE id=$id";
$r=mysqli_query($db,$q);
if($r){
	echo "page deleted <br>";
}else{
	echo "Error<br>";
	echo $q."<br>";
	echo mysqli_error($db);
}


?>