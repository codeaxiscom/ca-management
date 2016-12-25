$(document).ready(function(){
	var $uploadCrop;

	$('#change-password').click(function(){
		if($(this).text() == "Cancel") {
			$('#password-fields').css('display', 'none');
			$('#old_password').val("").prop('required',false);
			$('#new_password').val("").prop('required',false);
			$('#confirm_password').val("").prop('required',false);
			$(this).text("Click To Change");
		} else {
			$('#password-fields').fadeIn(500);
			$('#old_password').prop('required',true);
			$('#new_password').prop('required',true);
			$('#confirm_password').prop('required',true);
			$(this).text("Cancel");
		}
		
	});



	handleUpdateDB();

	$(":input").inputmask();
});

function handleUpdateDB() {
	

	function readFile(input) {
		if (input.files && input.files[0]) {
		    var reader = new FileReader();
		    
		    reader.onload = function (e) {
				$('.upload-demo').addClass('ready');
		    	$uploadCrop.croppie('bind', {
		    		url: e.target.result
		    	}).then(function(){
		    		console.log('jQuery bind complete');
		    	});
		    	
		    }
		    
		    reader.readAsDataURL(input.files[0]);
		}
	}

	$uploadCrop = $('#upload-demo').croppie({
		viewport: {
			width: 150,
			height: 150,
			type: 'circle'
		},
		enableExif: true
	});

	$('#upload').on('change', function() {
		$('.image-upload').fadeIn();
		$('.cancel-upload-btn').css('display', 'inline-block');
		readFile(this)
	});

	$('.cancel-upload-btn').on('click', function(e) {
		$('.image-upload').fadeOut();
		$(this).css('display', 'none');
		e.preventDefault();
	});

	$('#submit').on('click', function(e) {
		if(!validatePassChange()) {
			e.preventDefault();
		} else {
			$uploadCrop.croppie('result', {
				type: 'canvas',
				size: 'original'
			}).then(function(resp) {
				$('#imagebase64').val(resp);
			});
		}
	});

	$('#submit2').on('click', function(e) {
		if(!validatePassInput()) {
			e.preventDefault();
		} else {
			$uploadCrop.croppie('result', {
				type: 'canvas',
				size: 'original'
			}).then(function(resp) {
				$('#imagebase64').val(resp);
			});
		}
	});
}

function validatePassChange() {
	var flag = true;

	if($('#new_password').val() != $('#confirm_password').val()) {
		flag = false;
		$('.temp-hidden').fadeIn();
	}

	return flag;
}

function validatePassInput() {
	var flag = true;

	if($('#password').val() != $('#confirmpassword').val()) {
		flag = false;
		$('.temp-hidden').fadeIn();
	}

	return flag;
}
