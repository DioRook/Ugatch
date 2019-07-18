<?php
if(isset($_POST['clear'])){
	$js=json_decode($customer['cart'],TRUE);
	foreach ($js as $key) {
		$q="SELECT * FROM products WHERE p_code='$key[p_code]'";
		$r=mysqli_query($db,$q);
		$pro=mysqli_fetch_assoc($r);
		$stock=$pro['stock']+$key['count'];
		$ordered=$pro[$ordered]-$key['count'];
		$q="UPDATE products SET stock=$stock, ordered=$ordered  WHERE p_code='$key[p_code]'";
		$r=mysqli_query($db,$q);
		
	}
	
	
	$q="UPDATE customers SET cart='' WHERE email='$_SESSION[username]'";
	$r=mysqli_query($db,$q);
}
$customer=data_customer($db, $_SESSION['username']);
$jss=json_decode($customer['cart'],TRUE);
//print_r($customer);
//print_r($jss);
//$r=mysqli_query($db,$q);
//print_r($_POST);


$str="<div class='container'><table width=100%>".
		"<tr class='heading'><th>Product</th><th>Price</th><th>Quantity</th><th>Total</th><tr>";
		
		
$total=0;
if($jss){
foreach ($jss as $key) {
	//print_r($key);
	//echo "<br>";
	$str.="<tr class='item'>";
	$total+=$key['total'];
	?>
<ul class="list-group">
  <li class="list-group-item">
  	<div class="row">
  		<div class="col-md-2">
  		<h5><?php echo $key['name']; 
		 $str.="<td>".$key['name']."</td>";?></h5>
  		</div>
  		<div class="col-md-3">
  			Price: Rs.<?php echo $key['price'];
		 $str.="<td>".$key['price']."</td>";  ?> 
  		</div>
  		<div class="col-md-1">
  			x   
  		</div>
  		<div class="col-md-3">
  			Quantity: <?php echo $key['count'];
		 $str.="<td>".$key['count']."</td>";  ?>
  		</div>
  		<div class="col-md-3">
  			= Rs.<?php echo $key['total']; 
		 $str.="<td>".$key['total']."</td>"; ?>
  		</div>
  	</div>
  	
  </li>	
	
<?php 
$str.="</tr>";
}

?>
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
<?php 
$str.="<tr style='border-top:1px solid black;' class='total'><td colspan=3></td><td>Total:".$total."</td></tr>";
$str.="</table></div>";
$_SESSION['str']=$str;
?>
<br><br>
<div class="row">
	<div class="col-md-4 offset-md-1">
<form action="checkout" id="aa" method="post">
		<!--<input type="hidden" name="str" value="<?php echo $str;?>" />-->
		<input class="form-control btn btn-outline-primary" id="checkout" type="submit" name="checkout" value="Check Out"/>
		
</form>
	</div>
	<div class="col-md-4 offset-md-2">
<form action="mycart" id="aa" method="post">
		<input class="form-control btn btn-outline-primary" id="checkout" type="submit" name="clear" value="Clear Cart"  />

</form>
	</div>
</div>
<?php }
else {
	echo "<p class='alert alert-warning'>Cart Empty<p>";
}


?>
