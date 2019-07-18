<script>
		$(document).ready(function(){
		Dropzone.autoDiscover=false;
		
		var myDropzone= new Dropzone("#image",{url:"../images"});
		
	});
</script>

<H1>Product Manager</H1>


<div class="row">
	<div class="col-md-3">

		<div class="list-group">
				<a class="list-group-item list-gro list-group-item-action flex-column align-items-start <?php if($_GET['id']=='') echo 'active';?>" href="index.php?page=products">
					<h4 class="mb-1"><i class="fas fa-plus"></i> Add New Product</h4>
				</a>
			
		<?php
			$q="SELECT * FROM products ORDER BY name ASC";
			$r=mysqli_query($db,$q);
			while ($list=mysqli_fetch_assoc($r)) {
				$blur=substr(strip_tags($list['discription']), 0,120);
				?>
				<a class="list-group-item list-group-item-action flex-column align-items-start <?php selected($opened['id'],$list['id'],'active');?>" href="index.php?page=products&id=<?php echo $list['id'];?>">
					<h4 class="mb-1"><?php echo $list['name'];?></h4>
					<!--<p class="mb-1"><?php //echo $blur;?></p>-->
				</a>
		<?php	}?>
		</div>
	</div>
	<div class="col-md-9">
		<?php
			if(isset($message)){
				echo $message;
			}
		?>
		<div style="width:200px height:200px">
		</div>
		<form action="index.php?page=products&id=<?php echo $opened['id'];?>" method="post" enctype="multipart/form-data" role="form">
			<input type="file" name="file" />
		  <div class="form-group">
		<label for="p_code">Product Code:</label>
		<input type="text" class="form-control" id="p_code" name="p_code" value="<?php echo $opened['p_code'];?>" placeholder="p_code">
		  </div>
		  <div class="form-group">
		<label for="name">Product Name:</label>
		<input type="text" class="form-control" id="name" name="name" value="<?php echo $opened['name'];?>" placeholder="Product Name">
		  </div>
		  <div class="form-group">
		<label for="cat">Catagory:</label>
		<input type="text" class="form-control" id="cat" name="cat" value="<?php echo $opened['cat'];?>" placeholder="Catagory">
		  </div>
		  <div class="form-group">
		<label for="mrp">MRP:</label>
		<input type="number" class="form-control" id="mrp" name="mrp" value="<?php echo $opened['mrp'];?>" placeholder="MRP">
		  </div>
		  <div class="form-group">
		<label for="price">Price:</label>
		<input type="number" class="form-control" id="price" name="price" value="<?php echo $opened['price'];?>" placeholder="Price">
		  </div>
		  <div class="form-group">
		<label for="discount">Discount:</label>
		<input type="text" class="form-control" id="discount" name="discount" value="<?php echo $opened['discount'];?>" placeholder="Discount">
		  </div>
		  <div class="form-group">
		<label for="stock">Stock:</label>
		<input type="number" class="form-control" id="stock" name="stock" value="<?php echo $opened['stock'];?>" placeholder="Stock">
		  </div>
		  <div class="form-group">
		<label for="ordered">Ordered:</label>
		<input type="number" class="form-control" id="ordered" name="ordered" value="<?php echo $opened['ordered'];?>" placeholder="Ordered">
		  </div>
		  <div class="form-group">
		<label for="status">Status:</label>
		<input type="number" class="form-control" id="status" name="status" value="<?php echo $opened['status'];?>" placeholder="Status">
		  </div>
		  <div class="form-group">
		<label for="discription">Discription:</label>
		<textarea class="form-control"  rows=8 id="discription" name="discription" placeholder="Discription"><?php echo $opened['discription'];?></textarea>
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



