<?php
if(!isset($_POST)){
	header("Location: home");
}
if(!isset($_SESSION)){
	header("Location: home");
}

?>


<h3>Order Details</h3>
<ul class="list-group">
	<li class="list-group-item">
		<?php
echo $_SESSION['str'];
$string=$_SESSION['str'];

?>		
	</li>


	<li class="list-group-item">
<form method="post" action="invoice.php">
  <div class="form-group">
      <label for="delv">Deliver At:</label>
      <select name="delv" id="delv" class="form-control">
        <option>Kurla Railway Station</option>
        <option>Ghatkopar Railway Station</option>
        <option>KanjurMarg Railway Station</option>
        <option>Mulund Railway Station</option>
        <option>Thane Railway Station</option>
        <option>Airoli Railway Station</option>
        <option>Koparkhairane Railway Station</option>
        <option>Vashi Railway Station</option>
        <option>Nerul Railway Station</option>
        <option>VESIT</option>
        <option>TERNA</option>
        <option>DMCE</option>
      </select>
    </div>
    
  <div class="form-group">
      <label for="pay">Payment Method:</label>
      <select name="pay" id="pay" class="form-control">
        <option selected>COD</option>
      </select>
    </div>
    <input type="hidden" name="str" value="<?php echo $string;?>">
    <input type="hidden" name="email" value="<?php echo $customer['email'];?>">
    <input type="hidden" name="sub" value="1">
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	</li>

</ul>