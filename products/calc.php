<div class="card-columns"> 
	<?php
		$q="SELECT * FROM products WHERE catagory= 'calc' ORDER BY price ASC";
		$r=mysqli_query($db,$q);
		while ($list=mysqli_fetch_assoc($r)) {
		?>

		<div class="card" style="width: 18rem;">
		  <center><img class="card-img-top" style="width:10rem; height:10rem;" src="images/<?php echo $list['image']; ?>" alt="Card image cap"></center>
		  <div class="card-body">
		    <h5 class="card-title"><?php echo $list['name']; ?>
		    	<span class="float-right">
		    		<small><?php echo $list['price']; ?></small>
		    	</span>
		    </h5>
		    <a href="product?pro=<?php echo $list['id']; ?>" class="btn btn-outline-primary">BUY</a>
		  </div>
		</div>
	<?php }?>

</div>