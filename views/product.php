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
					<img id="example" src="images/<?php echo $pro['image']; ?>" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-8">
					
					<div class="w3agile_description">
						<h4>Description :</h4>
						<p><?php echo $pro['discription']; ?></p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4>Rs.<?php echo $pro['price']; ?>    <S><small>Rs.<?php echo $pro['mrp']; ?></small></S></h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="pulao basmati rice" />
									<input type="hidden" name="amount" value="21.00" />
									<input type="hidden" name="discount_amount" value="1.00" />
									<input type="hidden" name="currency_code" value="USD" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input class="form-control" type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>
					</div>	
	
</div>	
</div>