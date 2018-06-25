<H1>Navigation</H1>
<div class="row">
	<div class="col-md-5">
		<ul id="sort-nav" class="list-group">
		<?php
			$q="SELECT * FROM navigation ORDER BY position ASC";
			$r=mysqli_query($db,$q);
			while ($list=mysqli_fetch_assoc($r)) {?>
			<li id="list_<?php echo $list['id']; ?>" class="list-group-item">
			<a id="label_<?php echo $list['id']; ?>" class="list-group-item list-group-item-action flex-column align-items-start" data-toggle="collapse" data-target="#form_<?php echo $list['id'] ; ?>" >
				<?php echo $list['label'] ; ?>  <i class="fas fa-chevron-down"></i>
  			</a>
			<div class="collapse" id="form_<?php echo $list['id'] ; ?>">
 			  <div class="card card-body">
				<form class="form nav-form"  action="index.php?page=navigation&id=<?php echo $list['id'];?>" method="post" role="form">
				  <div class="form-group row">
				<label class="col-sm-3 col-form-label" for="id">Id : </label>
				<div class="col-sm-9">
				<input type="text" class="form-control form-control-sm" id="id" name="id" value="<?php echo $list['id'];?>" placeholder="Id Name" autocompelete="off">
				  </div>
				  </div>
				  <div class="form-group row">
				<label class="col-sm-3 col-form-label" for="label">Label: </label>
				<div class="col-sm-9">
				<input type="text" class="form-control form-control-sm" id="label" name="label" value="<?php echo $list['label'];?>" placeholder="Label" autocompelete="off">
				  </div>
				  </div>
				 <div class="form-group row">
				<label class="col-sm-3 col-form-label" for="url">URL: </label>
				<div class="col-sm-9">
				<input type="text" class="form-control form-control-sm" id="url" name="url" value="<?php echo $list['url'];?>" placeholder="" autocompelete="off">
				 </div>
				 </div>
				 <div class="form-group row">
				<label class="col-sm-3 col-form-label" for="status">Status: </label>
				<div class="col-sm-9">
				<input type="text" class="form-control form-control-sm" id="status" name="status" value="<?php echo $list['status'];?>" placeholder="status" autocompelete="off">
				 </div>
				 </div>
			  <button type="submit" class="btn btn-primary mb-2 navb">Save</button>
			  <input type="hidden" name="submitted" value='1' />
			  <input type="hidden" name="openedid" value="<?php echo $list['id'];?>" />
				<br></br>
				</form>

 			  			  	
 			  	</div>
 			  </div>			
			</li>
			<?php }?>
		</ul>
		
	</div>
	
	
	<div class="col-md-7">

		<?php if(isset($message)){echo $message;}?>
		
		</div>
	</div>