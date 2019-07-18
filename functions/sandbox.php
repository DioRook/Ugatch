<?php
ob_start();
function get_path() {
  $path = array();
  if (isset($_SERVER['REQUEST_URI'])) {
    $request_path = explode('?', $_SERVER['REQUEST_URI']);

    $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
    $path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
    $path['call'] = utf8_decode($path['call_utf8']);
    if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
      $path['call'] = '';
    }
    $path['call_parts'] = explode('/', $path['call']);

    $path['query_utf8'] = urldecode($request_path[1]);
    $path['query'] = utf8_decode(urldecode($request_path[1]));
    $vars = explode('&', $path['query']);
    foreach ($vars as $var) {
      $t = explode('=', $var);
      $path['query_vars'][$t[0]] = $t[1];
    }
  }
return $path;
}
function get_slug($db,$url){
	
	$pos=strrpos($url, '/');
	$slug=substr($url, $pos +1);
	return $slug;
}



function selected($val1,$val2,$ret)
{
	if ($val1==$val2) {
		echo $ret;
	}
}

function visits($db){
	
	$date=date("Y-m-d");
	$userIP=$_SERVER['REMOTE_ADDR'];
	$q="SELECT * FROM visitors WHERE `date`='$date'";
	$r=mysqli_query($db,$q);
	
	error_reporting(E_ALL);
    ini_set("display_errors", true);
 
	
	if(mysqli_num_rows($r)==0){
		
		$time=strtotime('next day 00:00');
		setcookie('visitor',$userIP,$time);
		$iq="INSERT INTO visitors (`date`,ip) VALUES('$date','$userIP')";
		$rr=mysqli_query($db,$iq);
		if($rr){
	}else{
		//print_r(mysqli_error($db)) ;
	}
		
	}else{
		$uq="UPDATE visitors SET views= views + 1 WHERE date='$date'";
		$rr=mysqli_query($db,$uq);
		
		$row=mysqli_fetch_assoc($r);
		if(!isset($_COOKIE['visitor'])){
		$newIP="$row[ip]";
			
		$time=strtotime('next day 00:00');
		setcookie('visitor',$userIP,$time);
			if(strpos($newIP,$userIP) == false){
				$newIP.=" $userIP";
			}
			$uq="UPDATE `visitors` SET ip='$newIP', uviews= uviews + 1 WHERE `date`='$date'";
			$rr=mysqli_query($db,$uq);
			if($rr){
		//print_r($rr);
	}else{
		//echo mysqli_error($db).$uq;
	}

	}
		
	}
	
}

?>