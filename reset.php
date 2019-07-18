<?php
include("functions/mail.php");
$s="Send OTP";

	$otp=rand(000, 999);
print_r($_POST);	
if(isset($_POST['otps'])){
	
	$s="Resend OTP";
	print_r($_POST);
	email($_POST['email'], "Reset Password", "Your OTP Is <br>".$_POST['otps']);
}
if(isset($_POST['s'])){
	if($_POST['otp']==$_POST['otps2']){
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
				$q = "INSERT INTO users (first, last, email, password, phone, status) VALUES ('$first', '$last', '$_POST[email]', SHA1('$_POST[password]'),'$_POST[phone]', '$_POST[status]')";
					
					if($verify == true) {
						$r = mysqli_query($db, $q);
					}
				}
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
		<div class="container">
			<div class="row">
				<div class="col-md-4 offset-md-4">
					<div class="card">
						<div class="card-header bg-info">Reset Password</div>
							<div class="card-body">
					<form action="reset.php" method="post">
					  <div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?php echo $_POST['email']; ?>" name="email" placeholder="Enter email">
					  </div>
					  <input type="hidden" name="otps" value='<?php echo $otp;?>' />
					  <button type="submit" name="otpb" class="btn btn-primary"><?php echo $s;?></button>
					</form>
					<form action="reset.php" method="post">
					  <div class="form-group">
					<label for="otp">OTP</label>
					<input type="password" class="form-control" id="otp" name="otp" placeholder="OTP">
					  </div>
					  <div class="form-group">
					<label for="password">New Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					  </div>
					  <div class="form-group">
					<label for="passwordv">Confirm Password</label>
					<input type="password" class="form-control" id="passwordv" name="passwordv" placeholder="Enter Password Again">
					  </div>
					  <input type="hidden" name="email" value="<?php echo $_POST['email'];?>" >
					  <input type="hidden" name="otps2" value='<?php echo $_POST["otps"];?>' />
					  <input type="hidden" name="s" value='1' />
					  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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