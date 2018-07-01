<?php 
session_start();
include ('config/connection.php');
if(isset($_POST['submitted'])){
	if($_POST['password'] != '') {
		
		if($_POST['password'] == $_POST['passwordv']) {
			
			$verify = true;
			
		} else {
			
			$verify = false;
			
		}					
		
	} else {
			
		$verify = false;	
		
	}
	$first=$_POST['first'];
	$last=$_POST['last'];
	$addr=mysqli_real_escape_string($db,$_POST['addr']);
	$q = "INSERT INTO customers (first, last, email, password, phone, clg, tut, addr) VALUES ('$first', '$last', '$_POST[email]', SHA1('$_POST[password]'),'$_POST[phone]', '$_POST[clg]' ,'$_POST[tut]' ,'$addr')";
	
	if($verify == true) {
		$r = mysqli_query($db, $q);
	}
				if($r){
					
					$message = '<p class="alert alert-success">User was Added!</p>';
					
				} else {
					
					//$message = '<p class="alert alert-danger">User could not be Added because: '.mysqli_error($db);
					if($verify == false) {
						$message .= '<p class="alert alert-danger">Password fields empty and/or do not match.</p>';
					}
					//$message .= '<p class="alert alert-warning">Query: '.$q.'</p>';
					
				}
							
			}
			

?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo 'Admin'.' | '.'Login'; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="utf-8">
		<?php include ('config/css.php');?>
		<?php include ('config/js.php');?>

	</head>
	<body>
		<main role="main">

		<?php// include (D_TEMP.'/navigation.php');?>
		
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<?php echo $message;?>
					<div class="card">
						<div class="card-header bg-info">Register</div>
							<div class="card-body">
					<form action="#" method="post">
			<div class="form-group">		
		<label for="first">First Name:</label>
		<input type="text" class="form-control" id="first" name="first"  placeholder="First Name" required autocompelete="off">
		  </div>
		  <div class="form-group">
		<label for="last">Last Name:</label>
		<input type="text" class="form-control" id="last" name="last"  placeholder="Last Name"  required autocompelete="off">
		  </div>
		 <div class="form-group">
		<label for="phone">Phone No.:</label>
		<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone No" required  autocompelete="off">
		 </div> 
		  <div class="form-group">
		<label for="email">Email:</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="Email" required  autocompelete="off">
		  </div>
		  <div class="form-group">
		<label for="password">Password:</label>
		<input type="password" class="form-control"  id="password" name="password" value=""  required placeholder="Password" autocompelete="off">
		  </div>
		  <div class="form-group">
		<label for="passwordv">Verify Password:</label>
		<input type="password"  class="form-control"  id="passwordv" name="passwordv" value="" required  placeholder="Type Password Again" autocompelete="off">
		  </div>
		 <div class="form-group">
		<label for="clg">College:</label>
		<input type="text" class="form-control" id="clg" name="clg" placeholder="College"  required autocompelete="off">
		 </div> 
		 <div class="form-group">
		<label for="tut">Tutions/Classes:</label>
		<input type="text" class="form-control" id="tut" name="tut" placeholder="tut"  required autocompelete="off">
		 </div> 
		  <div class="form-group">
		<label for="body">Address:</label>
		<textarea class="form-control "  rows=8 id="body" name="addr" placeholder="Address"></textarea>
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Register</button>
		  <input type="hidden" name="submitted" value='1' />
		  
		<br></br>
					</form>
					</div>
					</div>
				</div>
			</div>
		</div>
		
		
		</main><!--main-->
		
		<?php //include (D_TEMP.'/footer.php');?>
			
		<?php //if($debug==1) {include('widgets/debug.php');}?>
	</body>
	
	
</html>