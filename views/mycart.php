<?php
$js=json_decode($customer['cart'],TRUE);
//print_r($js);
echo "<br>";
$total=0;
foreach ($js as $key) {
	//print_r($key);
	//echo "<br>";
	$key['total']= $key['price']*$key['count'];
	$total+=$key['total'];
	?>
<ul class="list-group">
  <li class="list-group-item">
  	<div class="row">
  		<div class="col-md-2">
  		<h4><?php echo $key['name'];  ?></h4>
  		</div>
  		<div class="col-md-3">
  			Price: Rs.<?php echo $key['price'];  ?> 
  		</div>
  		<div class="col-md-1">
  			x   
  		</div>
  		<div class="col-md-3">
  			Quantity: <?php echo $key['count'];  ?>
  		</div>
  		<div class="col-md-3">
  			= Rs.<?php echo $key['total'];  ?>
  		</div>
  	</div>
  	
  </li>

	
	
<?php }?>
<li class="list-group-item">
	<div class="row">
		<div class="col-md-2 offset-md-7">
			<h5>Total</h5>
		</div>
		<div class="col-md-3">
			= Rs.<?php echo $total;  ?>
		</div>
	</div>

</ul>


