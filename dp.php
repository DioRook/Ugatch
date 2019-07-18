<?php 

$target_dir="upload/images";
$image=$_POST["image"];

if(!file_exists($target_dir)){
	mkdir($target_dir,077,TRUE);
}

$target_dir=$target_dir."/".rand()."_".time().".jpeg";
if(file_put_contents($target_dir, base64_decode($image))){
	$msg=array("Message"=>"The file is Uploaded","Status"=>"OK");
	echo json_encode($msg);
}else{
	$msg=array("Message"=>"Sorry! The file is Not Uploaded","Status"=>"Error");
	echo json_encode($msg);
	
}


?>