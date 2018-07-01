<br>

<div class="container">

<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		<?php
		$q="SELECT * FROM catagory ORDER BY id ASC";
		$r=mysqli_query($db,$q);
		while ($list=mysqli_fetch_assoc($r)) {
		?>
		
  <a href="store?cat=<?php echo $list['label']; ?>" id="<?php echo $list['label']; ?>" class="list-group-item list-group-item-action <?php echo selected($path['query_vars']['cat'], $list['label'], $ac); ?>">
  	<?php echo $list['name']; ?>
  </a>
	<?php }?>
		</div>
	</div>	
	<div class="col-md-10">
		<?php print_r($path['query_vars']); ?>
		<div class="container">
			<?php include("products/calc.php");?>
		</div>
		
	</div>
	
</div>

</div>

