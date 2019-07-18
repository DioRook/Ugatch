<?php
switch ($page) {
	case 'dashboard':
		
		break;
	case 'pages':
		if(isset($_POST['submitted'])==1){
			$title=mysqli_real_escape_string($db,$_POST['title']);
			$label=mysqli_real_escape_string($db,$_POST['label']);
			$header=mysqli_real_escape_string($db,$_POST['header']);
			$body=mysqli_real_escape_string($db,$_POST['body']);
			$user=$_POST['user'];	
			$slug=$_POST['slug'];		
			if(isset($_POST['id'])!=''){
				$action='Updated';
				$q="UPDATE posts SET user=$user,slug='$slug',title='$title',header='$header',body='$body',label='$label' WHERE id=$_GET[id]";
				unset($_POST);
			}else{
				$action='Added';
				$q="INSERT INTO posts (type,slug, user, title, label, header, body) VALUES(1,'$slug', $user,'$title','$label','$header','$body')";					
			}
			$r=mysqli_query($db,$q);
			if($r){
				$message='<p class="alert alert-success">Page was '.$action.'</p>';
			}
			else{
				$message='<p class="alert alert-danger">Page was not added because: '.mysqli_error($db).'</p>';
				$message.='<p class="alert alert-warning"> Query'.$q.'</p>';
			}
				
			}
		if(isset($_GET['id'])){$opened=data_posts($db, $_GET['id']);}
	break;
	case 'users':

			if(isset($_POST['submitted']) == 1) {
				
				//$first = mysqli_real_escape_string($dbc, $_POST['first']);
				//$last = mysqli_real_escape_string($dbc, $_POST['last']);
				$first=$_POST['first'];
				$last=$_POST['last'];
				if($_POST['password'] != '') {
					
					if($_POST['password'] == $_POST['passwordv']) {
						
						$password = " password = SHA1('$_POST[password]'),";
						$verify = true;
						
					} else {
						
						$verify = false;
						
					}					
					
				} else {
						
					$verify = false;	
					
				}
				
				if(isset($_POST['id']) != '') {
					
					$action = 'updated';
					$q = "UPDATE users SET first = '$first', last = '$last', email = '$_POST[email]', $password phone='$_POST[phone]', status = $_POST[status] WHERE id = $_GET[id]";
					$r = mysqli_query($db, $q);
					
				} else {
					
					$action = 'added';
					
					$q = "INSERT INTO users (first, last, email, password, phone, status) VALUES ('$first', '$last', '$_POST[email]', SHA1('$_POST[password]'),'$_POST[phone]', '$_POST[status]')";
					
					if($verify == true) {
						$r = mysqli_query($db, $q);
					}
				}
				
				
				if($r){
					
					$message = '<p class="alert alert-success">User was '.$action.'!</p>';
					
				} else {
					
					$message = '<p class="alert alert-danger">User could not be '.$action.' because: '.mysqli_error($db);
					if($verify == false) {
						$message .= '<p class="alert alert-danger">Password fields empty and/or do not match.</p>';
					}
					$message .= '<p class="alert alert-warning">Query: '.$q.'</p>';
					
				}
							
			}
			
			if(isset($_GET['id'])) { $opened = data_user($db, $_GET['id']); }
		break;
	case 'settings':
		if(isset($_POST['submitted'])==1){
			$value=mysqli_real_escape_string($db,$_POST['value']);
			$label=mysqli_real_escape_string($db,$_POST['label']);

			if(isset($_POST['id'])!=''){
				$action='Updated';
				$q="UPDATE settings SET id='$_POST[id]',value='$value',label='$label' WHERE id='$_POST[openedid]'";
				$r=mysqli_query($db,$q);
			}
			
			if($r){
				$message='<p class="alert alert-success">Settings was '.$action.'</p>';
			}
			else{
				$message='<p class="alert alert-danger">Settings was not added because: '.mysqli_error($db).'</p>';
				$message.='<p class="alert alert-warning"> Query'.$q.'</p>';
			}
				
			}		
		break;
	case 'navigation':
		if(isset($_POST['submitted'])==1){
			$url=mysqli_real_escape_string($db,$_POST['url']);
			$label=mysqli_real_escape_string($db,$_POST['label']);

			if(isset($_POST['id'])!=''){
				$action='Updated';
				$q="UPDATE navigation SET id=$_POST[id],url='$url',label='$label',status=$_POST[status] WHERE id='$_POST[openedid]'";
				$r=mysqli_query($db,$q);
			}
			
			if($r){
				$message='<p class="alert alert-success">Navigation was '.$action.'</p>';
			}
			else{
				$message='<p class="alert alert-danger">Navigation was not added because: '.mysqli_error($db).'</p>';
				$message.='<p class="alert alert-warning"> Query'.$q.'</p>';
			}
				
			}		
		break;
	case 'products':
		if(isset($_POST['submitted'])==1){
			$pcode=mysqli_real_escape_string($db,$_POST['p_code']);
			$name=mysqli_real_escape_string($db,$_POST['name']);
			$discription=mysqli_real_escape_string($db,$_POST['discription']);
			$stock=$_POST['stock'];	
			$ordered=$_POST['ordered'];	
			$price=$_POST['price'];
			$ds = DIRECTORY_SEPARATOR;  //1
			$id = $_POST['p_code'];	
			$storeFolder = 'images';   //2
			$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
			print_r($_FILES);
			$image = $id.'.'.$ext;
			if(isset($_POST['id'])!=''){
				$action='Updated';
				$q="UPDATE products SET p_code='$pcode',image = '$image', catagory='$_POST[cat]', name='$name',discription='$discription',mrp=$_POST[mrp],discount='$_POST[discount]', stock=$stock,ordered=$ordered,price=$price, status=$_POST[status] WHERE id=$_GET[id]";
				unset($_POST);
			}else{
				$action='Added';
				$q="INSERT INTO products (p_code,name,catagory,image,discription,stock,ordered,price,mrp,discount,status) VALUES ('$pcode','$name','$_POST[cat]','$image','$discription',$stock,$ordered,$price,$_POST[mrp],'$_POST[discount]',$_POST[status])";					
			}
			if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = $_SERVER['DOCUMENT_ROOT'] . $ds. $storeFolder . $ds;  //4
     mkdir($targetPath);
    $targetFile =  $targetPath. $image;  //5
    echo $targetFile;
    print_r(move_uploaded_file($tempFile,$targetFile)); //6    
    
    $deleteFile = $targetPath.$old['image'];
	
    if($old['image'] != '') {
    	
		if(!is_dir($deleteFile)) {
			
			unlink($deleteFile);
			
		}
    }
  
}
			$r=mysqli_query($db,$q);
			if($r){
				$message='<p class="alert alert-success">Product was '.$action.'</p>';
			}
			else{
				$message='<p class="alert alert-danger">Product was not added because: '.mysqli_error($db).'</p>';
				$message.='<p class="alert alert-warning"> Query'.$q.'</p>';
			}
				
			}
		if(isset($_GET['id'])){$opened=data_products($db, $_GET['id']);}
	break;
	default:
		
		break;
}
?>