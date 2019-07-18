<?php if(isset($opened['id'])) {?>


<?php }?>


<H1>User Manager</H1>
<div class="row">
	<div class="col-md-3">

		<div class="list-group">
				<a class="list-group-item list-group-item-action flex-column align-items-start <?php if($_GET['id']=='') echo 'active';?>" href="index.php?page=users">
					<h4 class="mb-1"><i class="fas fa-plus"></i> Add New User</h4>
				</a>
			
		<?php
			$q="SELECT * FROM users ORDER BY last ASC";
			$r=mysqli_query($db,$q);
			while ($list=mysqli_fetch_assoc($r)) {
				$list=data_user($db, $list['id']);
				//$blur=substr(strip_tags($list['body']), 0,120);
				?>
				<a class="list-group-item list-group-item-action flex-column align-items-start <?php selected($opened['id'],$list['id'],'active');?>" href="index.php?page=users&id=<?php echo $list['id'];?>">
					<h4 class="mb-1"><?php echo $list['fullname_rev'];?></h4>
					<!--<p class="mb-1"><?php //echo $blur;?></p>-->
				</a>
		<?php	}?>
		</div>
	</div>
	<div class="col-md-9">
		<?php if(isset($message)){echo $message;}?>

		<form action="index.php?page=users&id=<?php echo $opened['id'];?>" method="post" role="form">
			<div id="avatar">
				<?php if($opened['avatar'] != ''){ ?>
	
					<div class="avatar-container" style="background-image: url('../uploads/<?php echo $opened['avatar']; ?>')"></div>
	
				<?php } ?>
			</div>
		  <div class="form-group">
		<label for="first">First Name:</label>
		<input type="text" class="form-control" id="first" name="first" value="<?php echo $opened['first'];?>" placeholder="First Name" autocompelete="off">
		  </div>
		  <div class="form-group">
		<label for="last">Last Name:</label>
		<input type="text" class="form-control" id="last" name="last" value="<?php echo $opened['last'];?>" placeholder="Last Name" autocompelete="off">
		  </div>
		<div class="form-group">
		<label for="status">Status:</label>
		<select class="custom-select custom-select-lg mb-3" id="status" name="status">
			<option value="0" <?php if(isset($_GET['id'])){selected($opened['status'],'0',"selected");}  ?>>Inactive</option>
			<option value="1" <?php if(isset($_GET['id'])){selected($opened['status'],'1',"selected");}  ?>>Active</option>
		</select>
		 </div>
		 <div class="form-group">
		<label for="phone">Phone No.:</label>
		<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $opened['phone'];?>" placeholder="Phone No" autocompelete="off">
		 </div> 
		  <div class="form-group">
		<label for="email">Email:</label>
		<input type="email" class="form-control" id="email" name="email" value="<?php echo $opened['email'];?>" placeholder="Email" autocompelete="off">
		  </div>
		  <div class="form-group">
		<label for="password">Password:</label>
		<input type="password" class="form-control"  id="password" name="password" value="" placeholder="Password" autocompelete="off">
		  </div>
		  <div class="form-group">
		<label for="passwordv">Verify Password:</label>
		<input type="password"  class="form-control"  id="passwordv" name="passwordv" value="" placeholder="Type Password Again" autocompelete="off">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Save</button>
		  <input type="hidden" name="submitted" value='1' />
		  
		  <?php if(isset($opened['id'])) {?>
		  <input type="hidden" name="id" value="<?php echo $opened['id'];?>" />
		  <?php } ?>
		<br></br>
		</form>
		<?php if(isset($opened['id'])) {?>
		</form>
		<?php } ?>
		
		</div>
		</div>
		
		

		
	</div>
	
</div>


<!--

-->

