<?php
#JavaScript file:

?>

<!--Jquery-->
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<!--Jquery UI-->
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<!--Bootstrap JS-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!--Popper JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<!--TinyMCE-->
<script src="js/tinymce/tinymce.min.js"></script>
<!--Dropzone-->
<script src="js/dropzone.js"></script>
<!--SaveOnBlur-->
<script src="js/jquery.atom.SaveOnBlur.js"></script>

<script>
tinymce.init({
  selector: '.editor',
  height: 300,
  theme: 'modern',
  plugins:['autoresize', 'autolink', 'bbcode', 'importcss', 'layer', 'example', 'example_dependency','legacyoutput','lists','noneditable','fullpage',
  'print', 'preview', 'searchreplace', 'autolink', 'directionality', 'advlist','code','codesample','spellchecker','tabfocus',
  'contextmenu', 'directionality', 'emoticons', 'template', 'textcolor', 'paste', 'textcolor', 'colorpicker', 'textpattern','help','table','fullscreen',
  'hr','anchor', 'pagebreak','link','charmap','insertdatetime','nonbreaking','media','save','autosave','image','imagetools','toc','visualblocks','visualchars','wordcount'
  ],
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | emoticons',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
     
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });﻿
 </script>
<script>
	$(document).ready(function() {
	  $("#consol-debug").hide();
	  $("#btn-debug").click(function(){
	  	$("#consol-debug").toggle();
	  });
	  
	  		$(".btn-delete").on("click", function() {
			
			var selected = $(this).attr("id");
			var pageid = selected.split("del_").join("");
			
			var confirmed = confirm("Are you sure you want to delete this page?");
			
			if(confirmed == true) {
				
				$.get("ajax/pages.php?id="+pageid);
				
				$("#pageid_"+pageid).remove();				
				
			}
			
			
			//alert(selected);
			});
			
			
	  $("#sort-nav").sortable({
	  	cursor: "move",
	  	update: function (){
	  		var order=$(this).sortable("serialize");
	  		$.get("ajax/list-sort.php",order);
	  	}
	  });
	  
	  $('.nav-form').submit(function(event){
	   
	  	var navData = $(this).serializeArray();
	  	var navLabel=$('input[name=label]').val()+" "+"<i class='fas fa-chevron-down'></i>";
	  	var navID=$('input[name=id]').val();
	  	$.ajax({
	  		url:"ajax/navigation.php",
	  		method:"POST",
	  		data: navData
	  	}).done(function(){
	  		$("#label_"+navID).html(navLabel);
	  	});
	  	
	  	event.preventDefault();
	  });
	  
	  
	  
	});//End Doc ready
	

			

</script>