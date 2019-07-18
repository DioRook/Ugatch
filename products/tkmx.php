<?php
if(isset($_POST)){
print_r($_POST);
		$branch=$_POST['branch'];
		$sem=$_POST['sem'];
		$q="SELECT * FROM techmax WHERE branch='$branch' AND sem='$sem'";
		$r=mysqli_query($db,$q);
		echo mysqli_error($r);
}
?>
<div class="container">
	<form class="form-inline" method="post">
  <div class="input-group mb-2 mr-sm-2">
		<select  class="form-control mb-2 mr-sm-2" name="branch" >
			<option <?php selected($_POST['branch'], "CMPN", "selected") ?> value="CMPN">CMPN</option>
			<option <?php selected($_POST['branch'], "EXTC", "selected") ?>  value="EXTC">EXTC</option>
			<option  <?php selected($_POST['branch'], "IT", "selected") ?> value="IT">IT</option>
			<option <?php selected($_POST['branch'], "INST", "selected") ?>  value="INST">INST</option>
			<option <?php selected($_POST['branch'], "MECH", "selected") ?>  value="MECH">MECH</option>
		</select>
		</div>
  <div class="input-group mb-2 mr-sm-2">
		<select  class="form-control mb-2 mr-sm-2" name="sem" >
			<option <?php selected($_POST['sem'], "1", "selected") ?> value="1">1</option>
			<option <?php selected($_POST['sem'], "2", "selected") ?>  value="2">2</option>
			<option  <?php selected($_POST['sem'], "3", "selected") ?> value="3">3</option>
			<option <?php selected($_POST['sem'], "4", "selected") ?>  value="4">4</option>
			<option <?php selected($_POST['sem'], "5", "selected") ?>  value="5">5</option>
			<option <?php selected($_POST['sem'], "6", "selected") ?>  value="6">6</option>
			<option <?php selected($_POST['sem'], "7", "selected") ?>  value="7">7</option>
			<option <?php selected($_POST['sem'], "8", "selected") ?>  value="8">8</option>
		</select>
		</div>
  <div class="input-group mb-2 mr-sm-2">
		
		<input class="form-control mb-2 mr-sm-2" type="submit" value="Submit" />
		</div>
	</form>	
	<?php
	
		while ($list=mysqli_fetch_assoc($r)) {
			echo "string";
			print_r($list);
			foreach ($list as $key => $value) {
				echo $value."<br>";
			}
	
	?>
	
	
	<?php }?>
</div>