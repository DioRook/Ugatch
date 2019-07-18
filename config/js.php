<?php
#JavaScript file:

?>

<!--Jquery-->
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<!--Jquery UI-->
<scriptsrc="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<!--Bootstrap JS-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!--DropZone-->
<script src="admin/js/dropzone.js"></script>
<script>
	$(document).ready(function() {
	  $("#consol-debug").hide();
	  $("#btn-debug").click(function(){
	  	$("#consol-debug").toggle();
	  });
$('#exportForm').submit(function(e){
        e.preventDefault();
        e.stopImmediatePropagation();
        $.ajax({
            type: "POST",
            url: $(this).attr( 'action' ),
            data: $(this).serialize(),
            success: function( response ) {
                //alert(response );
                var g=response;
                
                alert("Added To Card");
               // location.reload();
            }
            
        });
        
    });
	  
	  
	});
</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5296709632550684",
    enable_page_level_ads: true
  });
</script>

<script>
var slideIndex = 0;
showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slideIndex++;
  if(slideIndex>slides.length){slideIndex=1}
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides,2000);
}
</script>

 <script>
  window.FontAwesomeConfig = {
    searchPseudoElements: true
  }
</script> 