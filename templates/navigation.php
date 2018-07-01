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
	<ul class="navbar-nav navbar-right">	
		<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php 
          if(isset($_SESSION['username'])){
          echo $customer['fullname_rev'];
		  }else{
		  	echo "<i class='far fa-user-circle'></i>";
		  }
          
          ?>
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	      <a class="dropdown-item" href="login.php">Login</a> 
          <div class="dropdown-divider"></div>
	      <a class="dropdown-item" href="logout.php">Logout</a>        
          <div class="dropdown-divider"></div>
        </div>
        </li>
	
	</ul>
	</div>
</nav><!--Navigation-->