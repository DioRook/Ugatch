<nav class="navbar navbar-expand-lg navbar-dark bg-dark " style="background-color:#ff0000 " role="navigation" >
	<?php if($debug==1) {?>
	<button id="btn-debug" type="button" class="btn btn-default btn-sm" style="float: left;"><i class="fa fa-bug"></i></button>
	<?php }?>
	<div class="container">
	<a class="navbar-brand" style="size:lg" href="#"><h1>Ugatch</h1></a>
	<ul class="navbar-nav mr-auto">
		<?php nav_main($db, $path); ?>
		<!--<li class="nav-item<?php if($pageid==4){echo $ac;}?>"><a class="nav-link" href="?page=4">FAQ</a></li>
		<li class="nav-item<?php if($pageid==5){echo $ac;}?>"><a class="nav-link" href="?page=5">Contact</a></li>-->
	</ul>
	</div>
</nav><!--Navigation-->