<?php
#JavaScript file:

?>

<!--Jquery-->
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<!--Jquery UI-->
<scriptsrc="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<!--Bootstrap JS-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
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
                alert("Added To Cart");
            }
        });

        return false;
    });
	  
	  
	});
</script>