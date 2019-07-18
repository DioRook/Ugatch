<ul class="list-group">
<?php

		$q="SELECT branch FROM techmax GROUP BY branch HAVING COUNT(*)>0";
		$r=mysqli_query($db,$q);
		while ($list=mysqli_fetch_assoc($r)) {
		
?>
		<li class="list-group-item">
			
  <a class="btn btn-outline" data-toggle="collapse" href="#<?php print_r($list['branch']);?>" role="button" aria-expanded="false" aria-controls="collapseExample">
    <?php print_r($list['branch']);?>
  </a>
		<?php
		$qq="SELECT sem FROM techmax WHERE branch='$list[branch]' GROUP BY sem HAVING COUNT(*)>0";
		$rr=mysqli_query($db,$qq);
		
		?>
			<div class="collapse" id="<?php print_r($list['branch']);?>">
					 <ul class="list-group">		
				<?php while ($list1=mysqli_fetch_assoc($rr)) {?>
					 <li class="list-group-item">
			
  <a class="btn btn-outline" data-toggle="collapse" href="#<?php print_r($list1['sem']);?>" role="button" aria-expanded="false" aria-controls="collapseExample">
    <?php echo "Sem ".$list1['sem'];?>
  </a>
				<div class="collapse" id="<?php print_r($list1['sem']);?>">
				<?php
				
				$qqq="SELECT * FROM techmax WHERE sem='$list1[sem]' AND branch='$list[branch]'";
				$rrr=mysqli_query($db,$qqq);
				while ($list2=mysqli_fetch_assoc($rrr)) {
				
				?>
					<ul class="list-group">	
						<li class="list-group-item">
						  <?php echo $list2['name']; ?>	
						</li>
					</ul>
				<?php }?>
				</div>
				<?php } ?> 
			</div>	
			</li>
			</ul>		
		<?php
		
		?>
			
		</li>

<?php
		}
?>

</ul>