<nav class="navbar navbar-expand-lg navbar-light bg-light " style="background-color:#ff0000 " role="navigation" >
	
	<a class="navbar-brand" style="size:lg" href="#"><h1>Ugatch</h1></a>
	<ul class="navbar-nav mr-auto">
		<?php //nav_main($db, $pageid); ?>
		<!--<li class="nav-item<?php if($pageid==4){echo $ac;}?>"><a class="nav-link" href="?page=4">FAQ</a></li>
		<li class="nav-item<?php if($pageid==5){echo $ac;}?>"><a class="nav-link" href="?page=5">Contact</a></li>-->
		<li class="nav-item<?php if($page=='dashboard'){echo $ac;}?>"><a class="nav-link" href="?page=dashboard">Dashboard</a></li>
		<li class="nav-item<?php if($page=='pages'){echo $ac;}?>"><a class="nav-link" href="?page=pages">Pages</a></li>
		<li class="nav-item<?php if($page=='users'){echo $ac;}?>"><a class="nav-link" href="?page=users">Users</a></li>
		<li class="nav-item<?php if($page=='settings'){echo $ac;}?>"><a class="nav-link" href="?page=settings">Settings</a></li>
		<li class="nav-item<?php if($page=='navigation'){echo $ac;}?>"><a class="nav-link" href="?page=navigation">Navigation</a></li>
	</ul>
	<ul class="navbar-nav navbar-right">
		<li>
			<?php if($debug==1) {?>
	<button id="btn-debug" type="button" class="btn btn-default btn-sm navbar-btn"><i class="fa fa-bug"></i></button>
	<?php }?>
		</li>
		<li class="nav-btn<?php //if($pageid==4){echo $ac;}?>"></li>
		<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $user['fullname_rev'];?>
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
	      <a class="dropdown-item" href="logout.php">Logout</a>        
          <div class="dropdown-divider"></div>
        </div>
        </li>
	</ul>
</nav><!--Navigation-->