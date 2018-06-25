<H1>Site Settings</H1>
<div class="row">
	<div class="col-md-11 offset-sm-1">

		<?php if(isset($message)){echo $message;}?>
		<?php
			$q="SELECT * FROM settings ORDER BY id ASC";
			$r=mysqli_query($db,$q);
			while ($opened=mysqli_fetch_assoc($r)) {?>
				<form class="form-inline"  action="index.php?page=settings&id=<?php echo $opened['id'];?>" method="post" role="form">
				  <div class="form-group">
				<label class="sr-only" for="id">Id Name: </label>
				<input type="text" class="form-control mb-2 mr-sm-2 blur-save" data-id="<?php echo $opened['id'];?>" data-label="Settings ID" data-db="settings-id" id="id" name="id" value="<?php echo $opened['id'];?>" placeholder="Id Name" autocompelete="off" disabled>
				  </div>
				  <div class="form-group">
				<label class="sr-only" for="label">Label: </label>
				<input type="text" class="form-control mb-2 mr-sm-2 blur-save" data-id="<?php echo $opened['id'];?>" data-label="Settings Label" data-db="settings-label" id="label" name="label" value="<?php echo $opened['label'];?>" placeholder="Label" autocompelete="off">
				  </div>
				 <div class="form-group">
				<label class="sr-only" for="value">Vaule: </label>
				<input type="text" class="form-control mb-2 mr-sm-2 blur-save" data-id="<?php echo $opened['id'];?>" data-label="Settings Value" data-db="settings-value" id="value" name="value" value="<?php echo $opened['value'];?>" placeholder="Status" autocompelete="off">
				 </div>
			  <button type="submit" class="btn btn-primary mb-2">Save</button>
			  <input type="hidden" name="submitted" value='1' />
			  <input type="hidden" name="openedid" value="<?php echo $opened['id'];?>" />
				<br></br>
				</form>
				
		<?php	}?>
		</div>
	</div>