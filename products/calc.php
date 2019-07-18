<div class="card-columns"> 
	<?php
		if(isset($_GET['cat'])){
			$a="catagory= '$_GET[cat]' AND ";
		}else{
			$a="";
		}
		$q="SELECT * FROM products WHERE $a status=1 ORDER BY price ASC";
		$r=mysqli_query($db,$q);
		while ($list=mysqli_fetch_assoc($r)) {
		?>

		<div class="card" style="width: 100%;">
		  <center><img class="card-img-top" style="width:10rem; height:10rem;" src="images/<?php echo $list['image']; ?>" alt="Card image cap"></center>
		  <div class="card-body">
		    <h5 class="card-title"><?php echo substr($list['name'], 0,20); ?>
		    	<span class="float-right">
		    		<small><?php echo RS.$list['price']; ?></small>
		    	</span>
		    </h5>
		    <a href="product?pro=<?php echo $list['id']; ?>" class="btn btn-outline-primary">BUY</a>
		  </div>
		</div>
	<?php }?>

</div>