<div id="consol-debug">
<?php #$all_vars=get_defined_vars();?>
	<h1>PATH</h1>
	<pre>
<?php print_r($path);?>
	</pre>
	<h1>SESSION</h1>
	<pre>
<?php print_r($_SESSION);?>
	</pre>
	<h1>GET</h1>
	<pre>
<?php print_r($_GET);?>
	</pre>
	<h1>POST</h1>
	<pre>
<?php print_r($_POST);?>
	</pre>
	<h1>Page</h1>
	<pre>
<?php print_r($page);?>
	</pre>
	<h1>View</h1>
	<pre>
<?php print_r($views);?>
	</pre>
	
</div>