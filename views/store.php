<div class="container-fluid">

<div class="row d-flex d-md-block flex-nowrap wrapper">
	<div class="col-md-2 float-left col-1 pl-0 pr-0 collapse width " id="sidebar">
		
		<div class="list-group border-0 card text-center text-md-left">
  <a href="#menu1" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><i class="fas fa-shopping-bag"></i> <span class="d-none d-md-inline">Category</span> </a>
  <div class="collapse" id="menu1">
  <a href="store" id="all" data-parent="#menu1" class="list-group-item list-group-item-action <?php echo selected($path['query_vars']['cat'], '', $ac); ?>">
  	All
  </a>
		<?php
		$q="SELECT * FROM catagory WHERE active=1 ORDER BY id ASC";
		$r=mysqli_query($db,$q);
		while ($list=mysqli_fetch_assoc($r)) {
		?>
		
  <a href="store?cat=<?php echo $list['label']; ?>" data-parent="#menu1" id="<?php echo $list['label']; ?>" class="list-group-item list-group-item-action <?php echo selected($path['query_vars']['cat'], $list['label'], $ac); ?>">
  	<?php echo $list['name']; ?>
  </a>
	<?php }?>
	</div>
		</div>
		</div>
	<main class="col-md-10 col px-5 pl-md-2 pt-2 main mx-auto">
		<div class="container">
			<a href="#" data-target="#sidebar" data-toggle="collapse" aria-expanded="false"><i class="fas fa-bars fa-2x py-2 p-1"></i></a>
		
			<?php 
			include("products/calc.php");
			?>
		</div>
		
	</main>
	
	
</div>

</div>

