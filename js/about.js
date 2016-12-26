
$(document).ready(function(){


	$( ".about" )
  		.mouseenter(function() {
    	$( ".titles", this ).hide();
    	$(".hovertitle", this).fadeIn(600);
    	$(".description", this).fadeIn(600);
    	$(this).animate({"background-color":"#ccc"});
  		})
  		.mouseleave(function() {
   	 $( ".titles", this ).show();
   	 	$(".hovertitle", this).hide();
    	$(".description", this).hide();
  	});



});





