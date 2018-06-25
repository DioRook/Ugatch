<?php
#CSS file:

?>

<!--Compulsory Bootstrap Css-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<!--Optional Bootstrap Css-->
		
<!--Jquery Css-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<!--FotnAwesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">

<style>
	html {
	  position: relative;
	  min-height: 100%;
	}
	body {
	  margin-bottom: 60px; /* Margin bottom by footer height */
	}
	.footer {
	  position: absolute;
	  bottom: 0;
	  width: 100%;
	  height: 60px; /* Set the fixed height of the footer here */
	  line-height: 60px; /* Vertically center the text there */
	  background-color: #f5f5f5;
	}
	#btn-debug{
		position: absolute;
		top=0px;
		left=0px;
	}
	#consol-debug{
		position: absolute;
		top: 60px;
		left: 0px;
		width: 800px;
		height:600px;
		word-break:break-all;
		word-wrap:break-word;
		overflow-x:hidden;
		overflow-y:scroll;
		background-color: #f5f5f5;
		
	}
	#consol-debug.pre{
		background-color: #ffffff;
	}
</style>