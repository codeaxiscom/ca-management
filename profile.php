<?php
	include('config.php');
	
	if(!isset($_SESSION['is_logged_in'])) {
		header("Location: index.php");
	}

	if(isset($_POST['submit'])) {
		global $connection;
		
		$nickname = $_POST['nickname'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
		$telephone_number = $_POST['telephone_number'];
		$biographical_info = $_POST['biographical_info'];
		$username = $_SESSION['username'];
		$new_password = $_POST['new_password'];
		$profile_picture = 'media/profile-pictures/no-image.png';
		if(isset($_POST['imagebase64'])){
	        $data = $_POST['imagebase64'];

	        if(strlen($data) > 20) {
	        	list($type, $data) = explode(';', $data);
		        list(, $data)      = explode(',', $data);
		        $data = base64_decode($data);

		        file_put_contents('media/profile-pictures/' . $_SESSION['username'] . '.png', $data);
	        }

	        if($_SESSION['profile_picture'] == $profile_picture) {
	        	$_SESSION['profile_picture'] = 'media/profile-pictures/' . $_SESSION['username'] . '.png';
	        	$profile_picture = 'media/profile-pictures/' . $_SESSION['username'] . '.png';
	        }
	    }


		if($new_password != '') {
			$sql = "UPDATE USER SET 
				NickName='$nickname',
				Email='$email',
				PhoneNumber='$phone_number',
				Password='$new_password',
				TelephoneNumber='$telephone_number',
				BiographicalInfo='$biographical_info',
				ProfilePicture='$profile_picture' WHERE UserName='$username'";
		} else {
			$sql = "UPDATE USER SET 
				NickName='$nickname',
				Email='$email',
				PhoneNumber='$phone_number',
				TelephoneNumber='$telephone_number',
				BiographicalInfo='$biographical_info',
				ProfilePicture='$profile_picture' WHERE UserName='$username'";
		}
		
		$_SESSION['nickname'] = $nickname;
		$_SESSION['email'] = $email;
		$_SESSION['phone_number'] = $phone_number;
		$_SESSION['telephone_number'] = $telephone_number;
		$_SESSION['biographical_info'] = $biographical_info;

	    $connection->query($sql);
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Profile - CodeAxis</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.6 -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="includes/dist/css/AdminLTE.min.css">
		<link rel="stylesheet" href="includes/dist/css/skins/skin-blue.min.css">
		<link rel="stylesheet" href="includes/croppie/croppie.css">
		<link rel="stylesheet" href="css/employee.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">

			<?php include('header.php'); ?>
			
			<?php include('sidebar.php'); ?>

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Profile
					</h1>
					<ol class="breadcrumb">
						<li><a href="main.php"><i class="fa fa-dashboard"></i> Home</a></li>
						<li>Employees</li>
						<li class="active">Your Profile</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
					<form action="" method="POST" id="form">
						<div class="profile-fields">
							<div class="entry-profile-field">
								<div class="row">
									<div class="col-md-12">
										<h4 class="profile-section-title">Name</h4>
									</div>
								</div>
								<div class="row profile-input">
									<div class="col-md-2">
										<h4>Username</h4>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control name-profile-text" id="username" value="<?php echo $_SESSION['username']; ?>" disabled>
									</div>
								</div>
								<div class="row profile-input">
									<div class="col-md-2">
										<h4>Nickname</h4>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control name-profile-text" id="nickname" name="nickname" value="<?php echo $_SESSION['nickname']; ?>" required>
									</div>
								</div>
							</div>
							
							<div class="entry-profile-field">
								<div class="row">
									<div class="col-md-12">
										<h4 class="profile-section-title">Contact Info</h4>
									</div>
								</div>
								<div class="row profile-input">
									<div class="col-md-2">
										<h4>Email</h4>
									</div>
									<div class="col-md-10">
										<input type="email" class="form-control name-profile-text" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" required>
									</div>
								</div>
								<div class="row profile-input">
									<div class="col-md-2">
										<h4>Phone Number</h4>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control name-profile-text" id="phone_number" name="phone_number" value="<?php echo $_SESSION['phone_number']; ?>" data-inputmask='"mask": "(+99) 999-999-9999"' data-mask required>
									</div>
								</div>
								<div class="row profile-input">
									<div class="col-md-2">
										<h4>Telephone Number</h4>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control name-profile-text" id="telephone_number" name="telephone_number" value="<?php echo $_SESSION['telephone_number']; ?>" data-inputmask='"mask": "999-9999"' data-mask>
									</div>
								</div>
							</div>
							
							<div class="entry-profile-field">
								<div class="row">
									<div class="col-md-12">
										<h4 class="profile-section-title">About Yourself</h4>
									</div>
								</div>
								<div class="row profile-input">
									<div class="col-md-2">
										<h4>Biographical Info</h4>
									</div>
									<div class="col-md-10">
										<textarea class="form-control bio-profile-text" name="biographical_info" rows="3"><?php echo $_SESSION['biographical_info']?></textarea>
										<p class="information-text">Tell the people something about yourself.</p>
									</div>
								</div>
								<div class="row profile-input">
									<div class="col-md-2">
										<h4>Profile Picture</h4>
									</div>
									<div class="col-md-10">
										<label class="btn btn-block btn-default btn-file upload-profile-btn">
											Upload a File<input type="file" id="upload" accept="image/*"/>
										</label>
										<button class="btn btn-block btn-danger cancel-upload-btn">
											Cancel
										</button>
									</div>
								</div>
								<div class="row image-upload">
									<div class="col-md-2 col-xs-0"></div>
									<div class="col-md-10 col-xs-12">
			                            <div class="upload-demo-wrap">
			                                <div id="upload-demo"></div>
			                                <input type="hidden" id="imagebase64" name="imagebase64" />
                            			</div>
									</div>
								</div>
							</div>
							
							<div class="entry-profile-field">
								<div class="row">
									<div class="col-md-12">
										<h4 class="profile-section-title">Account Management</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-md-2">
										<h4>Change Password</h4>
									</div>
									<div class="col-md-10">
										<div class="password-fields" id="password-fields">
											<div class="password-group">
												<input type="password" class="form-control password-profile-text" id="new_password" name="new_password" placeholder="New Password">
												<span class="error-message temp-hidden">These fields must be the same.</span>
											</div>
											<div class="password-group">
												<input type="password" class="form-control password-profile-text" id="confirm_password" name="confirm_password" placeholder="Confirm New Password">
												<span class="error-message temp-hidden">These fields must be the same.</span>
											</div>
										</div>
										<button type="button" id="change-password" class="btn btn-block btn-default upload-profile-btn">Click To Change</button>
									</div>
								</div>
							</div>
						</div>
						
						<button type="submit" id="submit" class="btn btn-primary" name="submit" type="submit">Save Changes</button>
					</form>
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

			<?php include('footer.php'); ?>
		</div>
		<!-- ./wrapper -->

		<!-- REQUIRED JS SCRIPTS -->

		<!-- jQuery 2.2.3 -->
		<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap 3.3.6 -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- AdminLTE App -->
		<script src="includes/dist/js/app.min.js"></script>
		<!-- Croppie -->
		<script src="includes/croppie/croppie.min.js"></script>
		<!-- InputMask -->
		<script src="plugins/input-mask/jquery.inputmask.js"></script>
		<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
		<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
		<!-- Custom JS -->
		<script src="js/profile-page.js"></script>
		<!-- Optionally, you can add Slimscroll and FastClick plugins.
			 Both of these plugins are recommended to enhance the
			 user experience. Slimscroll is required when using the
			 fixed layout. -->
	</body>
</html>
