<?php
include("../../config/connection.php");
$list=$_GET['list'];

foreach ($list as $position => $id) {
	$q="UPDATE navigation SET position=$position WHERE id=$id";
	$r=mysqli_query($db,$q);
	
	echo mysqli_error($db);
}


?>