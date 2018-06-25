<?php 
	function nav_main($db,$pageid){
	 $ac=" active";
	 $q="SELECT * FROM pages";
	 $r=mysqli_query($db,$q);
	 while($nav=mysqli_fetch_assoc($r)){?>
	
		<li class="nav-item<?php if($pageid== $nav['id']){echo $ac;}?>"><a class="nav-link" href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['label']; ?></a></li>
	
	<?php } 
	}

?>