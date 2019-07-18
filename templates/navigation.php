<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top " style="background-color:#ff0000 " role="navigation" >
	<?php if($debug==1) {?>
	<button id="btn-debug" type="button" class="btn btn-default btn-sm" style="float: left;"><i class="fa fa-bug"></i></button>
	<?php }?>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#navb">
			<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navb">
		
	<a class="navbar-brand" style="size:lg" href="#"><h1>Ugatch</h1></a>
	<ul class="navbar-nav mr-auto">
		<?php nav_main($db, $path); ?>
	</ul></div>
	<ul class="navbar-nav navbar-right">	
		<?php 
          if(isset($_SESSION['username'])){?>
        	 <li class="nav-item dropdown">
        	 	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        	 	<?php echo $customer['fullname_rev'];?>
        	 	</a>
        	 	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
        	 		<a class="dropdown-item" href="profile">My Profile</a> 
        	 		<a class="dropdown-item" href="mycart">My Cart</a> 
        	 		<div class="dropdown-divider"></div>
	      			<a class="dropdown-item" href="logout.php">Logout</a> 
        	 	</div>
        	 		
        	 </li>	
		  <?php }else{?>
		  	<a href="login.php" type="" class="form-control btn btn-outline-light">Login</a> 
		  
		  
		  <?php } 
          
          ?>
	
	</ul>
	
</nav><!--Navigation-->