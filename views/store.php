<div class="container">
<?php

$q="SELECT * FROM products ORDER BY id ASC";
$r=mysqli_query($db,$q);
while ($list=mysqli_fetch_assoc($r)) {
?>




	<div class="card" style="width: 100%;">
  <div class="card-body">
  	<div class="row">
  	<div class="col-md-4">
  	<img class="float-left" src="<?php echo 'images/'.$list['image'];?>" alt="Card image cap">
  	</div>
  	<div class="col-md-8">
    <h5 class="card-title"><?php echo $list['name']; ?></h5>
    <p class="card-text"><?php 
    	if($list['stock']==0){
    		echo "<div style='width:10rem; height:3rem;' class='alert alert-danger'> Out of Stock</div>";
    	}else{
    		echo "<div style='width:10rem; height:3rem;' class='alert alert-success'> In-Stock</div>";
    	}
    	?></p>
    <p class="card-text"> Price:<?php echo $list['price'];?></p>
    <p class="card-text"><?php echo $list['discription'];?></p>
    <a href="#" class="btn btn-primary">Buy</a>
  </div>
  </div>
</div>
</div>
	<?php }?>
</div>

