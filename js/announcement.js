$(document).ready(function(){

	$('.read-button').click(function(){
		$(this).attr("disabled",true);
		var storage = $(this).siblings('.read-tag').attr('data-original-title') + "<br/>Kiara";
		$(this).siblings('.read-tag').attr('data-original-title',storage);
		var value = parseInt($(this).siblings('.read-tag').attr('value')) + 1;
		$(this).siblings('.read-tag').attr('value',value);
		$(this).siblings('.read-tag').html(value + ' Noted');


	});



});