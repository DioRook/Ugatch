<?php

function data_setting_val($db,$id){
	$q="SELECT * FROM settings WHERE id = '$id'";
	$r=mysqli_query($db,$q);
	$debug=mysqli_fetch_assoc($r);
	 return $debug['value'];	
}


function data_post_type($db,$id){
	$q="SELECT * FROM post_types WHERE id='$id'";
	$r=mysqli_query($db,$q);
	$data=mysqli_fetch_assoc($r);
	return $data;
}


function data_posts($db,$id){
	if(is_numeric($id)){
		$q="SELECT * FROM posts WHERE id=$id";
	}else{
		$q="SELECT * FROM posts WHERE slug='$id'";
	}	
	$r=mysqli_query($db,$q);
	$data=mysqli_fetch_assoc($r);
	$data['body_nohtml']=strip_tags($data['body']);
	if($data['body']==$data['body_nohtml']){
		$data['body_formatted']='<p>'.$data['body'].'</p>';
	}
	else {
		$data['body_formatted']=$data['body'];
	}
	return $data;
}
function data_customer($db,$id){
	if(is_numeric($id)){
		$q="SELECT * FROM customers WHERE id=$id";
	}else{
		$q="SELECT * FROM customers WHERE email='$id'";
	}
	$r=mysqli_query($db,$q);
	$data=mysqli_fetch_assoc($r);
	$data['fullname']=$data['first'].' '.$data['last'];
	$data['fullname_rev']=$data['last'].' '.$data['first'];
	return $data;	
}


?>