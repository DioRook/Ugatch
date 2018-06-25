<?php
include("../../config/connection.php");
	$url=mysqli_real_escape_string($db,$_POST['url']);
	$label=mysqli_real_escape_string($db,$_POST['label']);
	$q="UPDATE navigation SET id=$_POST[id],url='$url',label='$label',status=$_POST[status] WHERE id='$_POST[openedid]'";
	$r=mysqli_query($db,$q);
	if($r){
		echo "Saved<br>".$q;
	}else{
		echo mysqli_error($db)."<br>".$q;
	}
?>