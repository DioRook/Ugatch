<?php ?>
<br>
<div class="row">
	<div class="col-md-6 offset-md-3">
<div class="card">
  <div class="card-header">
  	<?php echo $customer['fullname']; ?>
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">
	<table class="user">
		<tr>
			<td>
				E-Mail
			</td>
			<td>
				<?php echo $customer['email']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Phone Number
			</td>
			<td>
				<?php echo $customer['phone']; ?>
			</td>
		</tr>
		<tr>
			<td>
				College
			</td>
			<td>
				<?php echo $customer['clg']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Address
			</td>
			<td>
				<?php
                                echo $customer['fullname']."<br>";
                                 $a=explode(',', $customer['addr']); 
                                foreach ($a as $value) {
                                    echo $value."<br>";
                                }
                                ?>
			</td>
		</tr>
		
	</table>
	</p>
    
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>
</div>
</div>