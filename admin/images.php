<?php
include('../config/connection.php');
$ds = DIRECTORY_SEPARATOR;  //1
$id = $_GET['id'];
$storeFolder = '../images';   //2
$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
print_r($_FILES);
$newname = time();
$random = rand(100,999);
$name = $id.'.'.$ext;
$q = "SELECT image FROM products WHERE p_code = '$id'";
$r = mysqli_query($db, $q);
$old = mysqli_fetch_assoc($r);
$q = "UPDATE products SET image = '$name' WHERE p_code = '$id'";
$r = mysqli_query($db, $q);
 
echo $q.'<br>';
echo mysqli_error($db);
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $name;  //5
 
    move_uploaded_file($tempFile,$targetFile); //6    
    
    $deleteFile = $targetPath.$old['image'];
	
    if($old['image'] != '') {
    	
		if(!is_dir($deleteFile)) {
			
			unlink($deleteFile);
			
		}
    }
  
}
?> 