<?php
error_reporting(0);
session_start();
include ('../config/connection.php');
//echo "----Session---<br>";
//print_r($_SESSION);
//print_r($_POST);
//echo "<br>";


	$q="SELECT * FROM customers WHERE email='$_SESSION[username]'";
	$r=mysqli_query($db,$q);
	$l=mysqli_fetch_assoc($r);
	$js=json_decode($l['cart'],TRUE);
	$arr=array();
	$arr=$js;
	
	foreach ($_POST as $key => $value) {
		$obj->$key=$value;
	}
	$obj->total=$obj->count * $obj->price;
	print_r($obj);
	$x=0;
	$flag=1;
	foreach($arr as $a){
		
		if($a['name']==$obj->name){
			print_r($a);
			echo "match<br>";
			$a['count']+=$obj->count;
			$a['total']+=$obj->total;
			$arr[$x]=$a;
			print_r($a);
			print_r($arr);
			echo "<br>".$x;
			$flag=0;
		}else{
			
			echo "no match<br>";
		}
		$x+=1;
	}
	if($flag==1){
	$arr[]=$obj;
		
	}
	print_r($arr);
	$json=json_encode($arr);
	
//echo "----json---<br>";

//print_r($json);
//echo "<br>";

//echo "----json decode---<br>";
$js=json_decode($json,TRUE);
//print_r($js);
//echo "<br>";
$q="UPDATE customers SET cart='".$json."'WHERE email='$_SESSION[username]'";
$r=mysqli_query($db,$q);
if($r){
	//echo "done"."<br>".$q."<br>";
	$q="SELECT * FROM customers WHERE email='$_SESSION[username]'";
	$r=mysqli_query($db,$q);
	$l=mysqli_fetch_assoc($r);
	//echo "----cart---<br>";
	
	//print_r($l['cart']);
	//echo "<br>";
}else{
	echo mysqli_error($db)."<br>".$q;
}
//echo "----cart decode---<br>";
$js=json_decode($l['cart'],TRUE);
//print_r($js);
//echo "<br>";
//echo "---cart content---";
foreach ($js as $key) {
	//print_r($key);
	//echo"<br>";
}
$query="SELECT * FROM products WHERE p_code='$_POST[p_code]'";
	$result=mysqli_query($db,$query);
	$l=mysqli_fetch_assoc($result);

$stock=$l['stock']-$_POST['count'];
$ordered=$l['ordered']+$_POST['count'];
$q="UPDATE products SET stock=$stock, ordered=$ordered  WHERE p_code='$_POST[p_code]'";
$r=mysqli_query($db,$q);

//echo $stock;
?>



