<H1>Page Manager</H1>


<div class="row">
	<div class="col-md-3">

		<div class="list-group">
				<a class="list-group-item list-gro list-group-item-action flex-column align-items-start <?php if($_GET['id']=='') echo 'active';?>" href="index.php?page=pages">
					<h4 class="mb-1"><i class="fas fa-plus"></i> Add New Page</h4>
				</a>
			
		<?php
			$q="SELECT * FROM posts WHERE type = 1 ORDER BY title ASC";
			$r=mysqli_query($db,$q);
			while ($list=mysqli_fetch_assoc($r)) {
				$blur=substr(strip_tags($list['body']), 0,120);
				?>
				<div id="pageid_<?php echo $list['id']; ?>" class="list-group-item list-group-item-action flex-column align-items-start <?php selected($opened['id'],$list['id'],'active');?>" >
					<h4 class="mb-1"><?php echo $list['title'];?>
					<span class="float-right">
						<a href="#" id="del_<?php echo $list['id']; ?>" class="btn btn-outline-danger btn-delete"><i class="fa fa-trash-alt"></i></a>
						<a href="index.php?page=pages&id=<?php echo $list['id'];?>" class="btn btn-outline-primary"><i class="fa fa-chevron-right"></i></a>
					</span>
					</h4>
					<p class="mb-1"><?php echo $blur;?></p>
				</div>
		<?php	}?>
		</div>
	</div>
	<div class="col-md-9">
		<?php
			if(isset($message)){
				echo $message;
			}
		?>

		<form action="index.php?page=pages&id=<?php echo $opened['id'];?>" method="post" role="form">
		  <div class="form-group">
		<label for="title">Page Title:</label>
		<input type="text" class="form-control" id="title" name="title" value="<?php echo $opened['title'];?>" placeholder="Page Title">
		  </div>
		  <div class="form-group">
		<label for="user">Page User:</label>
		<select class="custom-select custom-select-lg mb-3" id="user" name="user">
			<option value="0">no user</option>
			<?php
			$q="SELECT id FROM users ORDER BY first ASC";
			$r=mysqli_query($db,$q);
			while ($user_list=mysqli_fetch_assoc($r)) {
				$user_data=data_user($db, $user_list['id']);
			?>
			<option value="<?php echo $user_data['id'];?>"
			<?php
			if(isset($_GET['id'])){ 
				selected($opened['user'],$user_data['id'],"selected");
			}else{
				selected($user['id'],$user_data['id'],"selected");
			}
			?>>
			<?php echo $user_data['fullname'];?>
			</option>
			<?php }?>
		</select>
		  </div>
		  <div class="form-group">
		<label for="slug">Page Slug:</label>
		<input type="text" class="form-control" id="slug" name="slug" value="<?php echo $opened['slug'];?>" placeholder="Page slug">
		  </div>
		  <div class="form-group">
		<label for="label">Page Label:</label>
		<input type="text" class="form-control" id="label" name="label" value="<?php echo $opened['label'];?>" placeholder="Page label">
		  </div>
		  <div class="form-group">
		<label for="header">Page Header:</label>
		<input type="text" class="form-control" id="header" name="header" value="<?php echo $opened['header'];?>" placeholder="Page Header">
		  </div>
		  <div class="form-group">
		<label for="body">Page Body:</label>
		<textarea class="form-control editor"  rows=8 id="body" name="body" placeholder="Page Body"><?php echo $opened['body'];?></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Save</button>
		  <input type="hidden" name="submitted" value='1' />
		  <?php if(isset($opened['id'])) {?>
		  <input type="hidden" name="id" value="<?php echo $opened['id'];?>" />
		  <?php } ?>
		</form>
		<br></br>
		
		
	</div>
	
</div>



