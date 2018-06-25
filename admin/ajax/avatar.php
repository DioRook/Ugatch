<?php
include("../../config/connection.php");
$id=$_GET['id'];

$q="SELECT avatar FROM users WHERE id=<?php echo $opened[id];?>";
$r=mysqli_query($db,$q);
if($r){
	echo "done";
}else{
	echo mysqli_error($db).$q;
}
$data=mysqli_fetch_assoc($r);
?>

<div class="avatar-container" style="background-image: url('../uploads/<?php echo $opened['avatar']; ?>')"></div>
