<?php
	include('config.php');
	
	if(!isset($_SESSION['is_logged_in'])) {
		header("Location: index.php");
	}

	$username = $_GET['username'];

	global $connection;
	$sql = "SELECT userID, username, usertype, firstname, lastname, nickname, position, gender, age, 
				email, phonenumber, telephonenumber, biographicalinfo, membershipdate, 
				profilepicture FROM USER WHERE username = '$username'";
	$results = $connection->query($sql);
	$result = $results->fetch_assoc();

	$userID = $result['userID'];
	$usertype = $result['usertype'];
	$firstname = $result['firstname'];
	$lastname = $result['lastname'];
	$nickname = $result['nickname'];
	$position = $result['position'];
	$gender = $result['gender'];
	$age = $result['age'];
	$email = $result['email'];
	$phonenumber= $result['phonenumber'];
	$telephonenumber = $result['telephonenumber'];
	$biographicalinfo = $result['biographicalinfo'];
	$membershipdate = $result['membershipdate'];

	if($result['profilepicture'] != '')
		$profilepicture = $result['profilepicture'];
	else
		$profilepicture = 'media/profile-pictures/no-image.png';

	if(isset($_POST['sendMessageBtn'])) {
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$senderID = $_SESSION['userID'];

		$sql = "INSERT INTO message(UserID, SenderID, Subject, Message) VALUES ($userID, $senderID, '$subject', '$message')";
		$connection->query($sql);
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>All Employees - CodeAxis</title>
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
		<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
		<link rel="stylesheet" href="includes/dist/css/skins/skin-blue.min.css">
		<link rel="stylesheet" href="css/employee-profile.css">
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
						Employee Profile
					</h1>
					
					<ol class="breadcrumb">
						<li><a href="main.php"><i class="fa fa-dashboard"></i> Home</a></li>
						<li>Employees</li>
						<li>All Employees</li>
						<li class="active"><?php echo $firstname . ' ' . $lastname; ?></li>
					</ol>
				</section>
				<!-- Main content -->
				<section class="content">
					<div class="row offset-bottom">
						<div class="col-md-2">
							<p class="profile-image">
								<img class="profile-image" src="<?php echo $profilepicture; ?>" />
							</p>
						</div>
						<div class="col-md-10 offset-left">
							<h3 class="profile-name"><?php echo $firstname . ' ' . $lastname; ?><span class="profile-position"> (<?php echo $position; ?>)</span></h3>
							<div class="row">
								<div class="col-md-4">
									<?php if($nickname != ""): ?>
										<p><span class="label-text">Nickname:</span> <?php echo $nickname; ?></p>
									<?php endif; ?>
									<?php if($gender != ""): ?>
										<p><span class="label-text">Gender:</span> <?php echo $gender; ?></p>
									<?php endif; ?>
									<?php if($age != ""): ?>
										<p><span class="label-text">Age:</span> <?php echo $age . ' years old'; ?></p>
									<?php endif; ?>
									<?php if($email != ""): ?>
										<p><span class="label-text">Email:</span> <?php echo $email; ?></p>
									<?php endif; ?>
									<?php if($phonenumber != ""): ?>
										<p><span class="label-text">Mobile Number:</span> <?php echo $phonenumber; ?></p>
									<?php endif; ?>
									<?php if($telephonenumber != ""): ?>
										<p><span class="label-text">Telephone Number:</span> <?php echo $telephonenumber; ?></p>
									<?php endif; ?>
								</div>
								<div class="col-md-8">
									<?php if($biographicalinfo != ""): ?>
										<p><span class="label-text">Biographical Info:</span> <?php echo $biographicalinfo; ?></p>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-10 offset-left">
							<button type="button" class="btn btn-primary profile-buttons" data-toggle="modal" data-target="#view-tasks-modal">View Projects</button>
							<!--------------- VIEW TASKS MODAL ---------------->
							<div class="modal fade" id="view-tasks-modal" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
											<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Xavier David's Projects</h4>
											</div>
										<div class="modal-body">
											<table class="table-striped task-table">
												<thead>
													<tr>
														<th>Project Title</th>
														<th>Date Started</th>
														<th>Date Due</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Janata</td>
														<td>December 5, 2016</td>
														<td>December 15, 2016</td>
														<td><a href="#">More Details</a></td>
													</tr>
													<tr>
														<td>Michael Leddin</td>
														<td>December 20, 2016</td>
														<td>December 24, 2016</td>
														<td><a href="#">More Details</a></td>
													</tr>
													<tr>
														<td>Michael Leddin</td>
														<td>December 20, 2016</td>
														<td>December 24, 2016</td>
														<td><a href="#">More Details</a></td>
													</tr>
													<tr>
														<td>Michael Leddin</td>
														<td>December 20, 2016</td>
														<td>December 24, 2016</td>
														<td><a href="#">More Details</a></td>
													</tr>
													<tr>
														<td>Michael Leddin</td>
														<td>December 20, 2016</td>
														<td>December 24, 2016</td>
														<td><a href="#">More Details</a></td>
													</tr>
													<tr>
														<td>Michael Leddin</td>
														<td>December 20, 2016</td>
														<td>December 24, 2016</td>
														<td><a href="#">More Details</a></td>
													</tr>
													<tr>
														<td>Michael Leddin</td>
														<td>December 20, 2016</td>
														<td>December 24, 2016</td>
														<td><a href="#">More Details</a></td>
													</tr>
													<tr>
														<td>Michael Leddin</td>
														<td>December 20, 2016</td>
														<td>December 24, 2016</td>
														<td><a href="#">More Details</a></td>
													</tr>
													<tr>
														<td>Michael Leddin</td>
														<td>December 20, 2016</td>
														<td>December 24, 2016</td>
														<td><a href="#">More Details</a></td>
													</tr>
													<tr>
														<td>Michael Leddin</td>
														<td>December 20, 2016</td>
														<td>December 24, 2016</td>
														<td><a href="#">More Details</a></td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							 </div>
							<button class="btn btn-primary profile-buttons" data-toggle="modal" data-target="#assign-task-modal">Assign Project</button>
							<!--------------- ASSIGN TASK MODAL ---------------->
							<div class="modal fade" id="assign-task-modal" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Modal Header</h4>
										</div>
										<div class="modal-body assign-task-body">
											<div class="main-button-links">
												<button type="button" class="btn btn-primary assign-buttons existing-projects">Existing Projects</button>
												<button type="button" class="btn btn-primary assign-buttons new-projects">New Projects</button>
											</div>
											<div class="table-existing-projects table-responsive">
												<table class="table-striped assign-table">
													<thead>
														<tr>
															<th>ID</th>
															<th>Skills Needed</th>
															<th>Project Employer</th>
															<th>Date Due</th>
															<th>Price</th>
														</tr>
													</thead>
													<tbody>
														<tr class="clickable-row">
															<td>1</td>
															<td>CSS</td>
															<td>Janata</td>
															<td>December 15, 2016</td>
															<td>₱6,000.00</td>
														</tr>
														<tr class="clickable-row">
															<td>2</td>
															<td>Graphic Design</td>
															<td>Michael Leddin</td>
															<td>December 24, 2016</td>
															<td>₱5,000.00</td>
														</tr>
														<tr class="clickable-row">
															<td>3</td>
															<td>PHP</td>
															<td>Michael Leddin</td>
															<td>December 24, 2016</td>
															<td>₱10,000.00</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="project-description">
											<div class="row">
												<div class="col-md-3 col-xs-12">
													<input type="hidden" id="selected-id" value="" name="selected-id">
													<p>Project ID: <span class="selected-id"></span></p>
												</div>
												<div class="col-md-3 col-xs-12">
													<!-- Price -->
													<input type="text" placeholder="Price" class="assign-price">
												</div>
												<div class="col-md-4 col-xs-12">
													<!-- Date -->
													<div class="form-group">
														<div class="input-group date">
															<div class="input-group-addon">
																<i class="fa fa-calendar"></i>
															</div>
															<input type="text" class="form-control" id="datepicker">
														</div>
													</div>
												</div>
											</div>
											<textarea rows="10" class="assign-textarea-input" placeholder="Project Description"></textarea><br/>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default assign-back">Back</button>
											<button type="button" class="btn btn-primary assign-button">Assign</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							 </div>							
							<button class="btn btn-primary profile-buttons" data-toggle="modal" data-target="#view-payroll-modal">View Payroll</button>
							<!--------------- VIEW PAYROLL MODAL ---------------->
							<div class="modal fade" id="view-payroll-modal" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
											<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Modal Header</h4>
											</div>
										<div class="modal-body">
											<p>Some text in the modal.</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							 </div>							
							<button class="btn btn-primary profile-buttons" data-toggle="modal" data-target="#leave-message-modal">Leave Message</button>
							<!--------------- LEAVE MESSAGE MODAL ---------------->
							<div class="modal fade" id="leave-message-modal" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">New Message</h4>
										</div>
										<div class="modal-body">
											<p class="profile-name">To: <?php echo $firstname . ' ' . $lastname;?><span class="date-message">Date: <?php echo date('F d, Y'); ?></span></p><hr/>
											<form action="" method="POST">
												<input type="text" class="subject-input" name="subject" placeholder="Subject">
												<textarea rows="10" class="textarea-input" name="message" placeholder="Your Message"></textarea>											
											<div style="background-color:green; height: 25px; width: 100%;"/>
										</div>
										<div class="modal-footer">
											<input type="submit" class="btn btn-primary send-button" name="sendMessageBtn" value="Send"/>
											</form>
										</div>
									</div>
								</div>
							 </div>
						</div>
					</div>
					<div class="container">
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
		<script src="js/index.js"></script>
		<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
		<script src="js/employee-profile.js"></script>
		<!-- Optionally, you can add Slimscroll and FastClick plugins.
			 Both of these plugins are recommended to enhance the
			 user experience. Slimscroll is required when using the
			 fixed layout. -->
		<script>
		    //Date picker
			$('#datepicker').datepicker({
				autoclose: true
			});
		</script>
	</body>
</html>

