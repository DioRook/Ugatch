<?php
$id=$path['query_vars']['pro'];
$q="SELECT * FROM products WHERE id= $id";
$r=mysqli_query($db,$q);
$pro=mysqli_fetch_assoc($r);
?>
<br>
<br>
<div class="container">
	<h4><?php echo $pro['name']; ?></h4>
<div class="row">
				<div class="col-md-4">
					<img style="margin-left: auto;margin-right: auto;width: 100%;height: 400px;" id="example" src="images/<?php echo $pro['image']; ?>" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-8">
					
					<div class="w3agile_description">
						<h4>Description :</h4>
						<p><?php echo $pro['discription']; ?></p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4><?php echo RS.$pro['price']; ?>    <S><small>Rs.<?php echo RS.$pro['mrp']; ?></small></S></h4>
							You Save: <?php echo RS.($pro['mrp']-$pro['price'])."  <b>(flat".$pro['discount']."OFF)</b>";?>
						</div>
						<div>
							
						</div>
						<?php if(isset($_SESSION['username'])){
							if($customer['active']==1){?>
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="ajax/cart.php" id="exportForm" method="post">
								<fieldset>
									<?php if($pro['stock']>0){ ?>
								 <div class="form-group">
								<label class="sr=only" for="count">count:</label>
								<input type="number" class="form-control" id="count" name="count" placeholder="count" value="1" min="1" max="<?php echo $pro['stock']; ?>" required autocompelete="off">
								 </div> 
								 <?php }else{?>
								 	<p class="alert alert-danger" style="width: 12rem" >Out Of Stock</p>
								 	<?php }?>
								 	
									<input type="hidden" name="p_code" value="<?php echo $pro['p_code']; ?>" />
									<input type="hidden" name="name" value="<?php echo $pro['name']; ?>" />
									<input type="hidden" name="price" value="<?php echo $pro['price']; ?>" />
									<input class="form-control" id="btn-pro" type="submit" name="submit" <?php selected($pro['stock'], 0 , "disabled") ?> value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>
						<?php }else{?>
							<p class="alert alert-warning"> Please <a href="http://ugatch.com/activation.php?email=<?php echo $customer['email'];?>">Activate Your Account</a>To Start Shopping </p>
						<?php }
						}else{?>
							<p class="alert alert-warning"> <a href="login.php"> Login </a>To Start Shopping </p>
						<?php }?>
							
					</div>	
	
</div>	
</div>