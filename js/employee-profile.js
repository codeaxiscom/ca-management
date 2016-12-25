$(document).ready(function(){
	$('.existing-projects').click(function(){
		$('.main-button-links').css('display', 'none');
		$('.table-existing-projects').css('display', 'block');
		$('.assign-back').css('display','initial');
	});

	$('.assign-back').click(function(){
		$('.table-existing-projects').css('display', 'none');
		$('.main-button-links').css('display', 'block');
		$(this).css('display', 'none');
		$('.project-description').css('display', 'none');
		$('.assign-button').css('display', 'none');
	});
	
	var selectedRow = null;
	$('.clickable-row').click(function(){
		$(this).css('color', 'black');
		$('.project-description').fadeIn();
		var id = $(this).find("td:nth-child(1)").text();
		$('.selected-id').text(id);
		$('#selected-id').val(id);
		$('.assign-button').css('display', 'initial');
		selectedRow = $(this);
		$('.assign-button').addClass('btn-primary');
	});
	
	$('.assign-button').click(function(){
		$(this).text('Undo').addClass('btn-danger');
		$('.project-description').css('display', 'none');
		$(selectedRow).fadeOut();
	});
});


/*

	$('.assign-text').click(function(){
		if($(this).text() == 'Cancel'){
			$(this).text('Assign').css('color', '#3c8dbc');
		}else{
			$(this).text('Cancel').css('color', 'red');
		}
	});
*/