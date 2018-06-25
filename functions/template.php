<?php 
	function nav_main($db,$path){
	 $ac=" active";
	 $q="SELECT * FROM navigation ORDER BY position ASC";
	 $r=mysqli_query($db,$q);
	 while($nav=mysqli_fetch_assoc($r)){
	 	$nav['slug']=get_slug($db, $nav['url']);
	 	?>
	
		<li class="nav-item<?php selected($nav['slug'],$path['call_parts'][0],$ac);?>"><a class="nav-link" href="<?php echo $nav['url']; ?>"><?php echo $nav['label']; ?></a></li>
	
	<?php } 
	}

?>