<?php
$q="SELECT * FROM visitors ORDER BY date DESC LIMIT 10";
$r=mysqli_query($db,$q);


?>
<div class="container">
<H1>Dashboard</H1>
<ul class="list-group">
  <li class="list-group-item bg-light">
  	  	<div class="row">
  		<div class="col-md-4">Date</div>
  		<div class="col-md-4">Visitors</div>
  		<div class="col-md-4">Unique Visitors</div>
  		
  	</div>
  </li>
<?php
while($list=mysqli_fetch_assoc($r)){


?>


  <li class="list-group-item">
  	<div class="row">
  		<div class="col-md-4"><?php echo $list['date']; ?></div>
  		<div class="col-md-4"><?php echo $list['views']; ?></div>
  		<div class="col-md-4"><?php echo $list['uviews']; ?></div>
  		
  	</div>
  	
  </li>


<?php } ?>
</ul>
</div>