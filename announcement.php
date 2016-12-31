<?php
	include('config.php');
	
	if(!isset($_SESSION['is_logged_in'])) {
		header("Location: index.php");
	}

?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Dashboard - CodeAxis</title>
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
		<link rel="stylesheet" href="css/announcement.css">

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
						Announcements
						<button type="button" class="btn btn-primary new-announcement">New Announcement</button>
					</h1>
					<ol class="breadcrumb">
						<li><a href="main.php"><i class="fa fa-dashboard"></i> Home</a></li>
						<li class="active">Announcements</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">

					<!-- Your Page Content Here -->
					<div class="container announcement-container">
						<div class="row">
							<div class="col-md-8 announcement-heading">
								<img src="media/profile-pictures/jude.png" class="img-responsive announcement-image">
								<div class="heading-text">
									<h4>Jemar Jude A. Maranga</h4>
									<h5>2 hours ago</h5>
								</div>
							</div>
							<div class="col-md-4 heading-button">
								<button type="button" class="btn btn-danger delete-button" data-toggle="modal" data-target="#myModal">Delete</button>
									<div id="myModal" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Confirm Deletion</h4>
												</div>
												<div class="modal-body">
													<p>Are you sure you want to delete this announcement?</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
													<button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
												</div>
											</div>
										</div>
									</div>

								<button type="button" class="btn btn-primary edit-button">Edit</button>
							</div>
						</div><hr/>
						<div class="row">
							<div class="col-md-12">
								<p>Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit
								Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit
								Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit
								Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit</p>
							</div>
						</div><hr/>
						<div class="row">
							<div class="col-md-12 announcement-footer">
								<button type="button" class="btn btn-primary read-button">Noted</button>
								<a href="#" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Xavier <br/> David <br/> Jude <br/> Chris" class="read-tag">4 Noted</a>
							</div>
						</div>
					</div>
					<div class="container announcement-container">
						<div class="row">
							<div class="col-md-8 announcement-heading">
								<img src="media/profile-pictures/jude.png" class="img-responsive announcement-image">
								<div class="heading-text">
									<h4>Jemar Jude A. Maranga</h4>
									<h5>2 hours ago</h5>
								</div>
							</div>
							<div class="col-md-4 heading-button">
								<button type="button" class="btn btn-danger delete-button">Delete</button>
								<button type="button" class="btn btn-primary edit-button">Edit</button>
							</div>
						</div><hr/>
						<div class="row">
							<div class="col-md-12">
								<p>Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit
								Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit
								Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit
								Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit</p>
							</div>
						</div><hr/>
						<div class="row">
							<div class="col-md-12 announcement-footer">
								<button type="button" class="btn btn-primary read-button">Noted</button>
								<a href="#" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Xavier <br/> David <br/> Jude <br/> Chris" class="read-tag">4 Noted</a>
							</div>
						</div>
					</div>
					<div class="container announcement-container">
						<div class="row">
							<div class="col-md-8 announcement-heading">
								<img src="media/profile-pictures/jude.png" class="img-responsive announcement-image">
								<div class="heading-text">
									<h4>Jemar Jude A. Maranga</h4>
									<h5>2 hours ago</h5>
								</div>
							</div>
							<div class="col-md-4 heading-button">
								<button type="button" class="btn btn-danger delete-button">Delete</button>
								<button type="button" class="btn btn-primary edit-button">Edit</button>
							</div>
						</div><hr/>
						<div class="row">
							<div class="col-md-12">
								<p>Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit
								Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit
								Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit
								Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit Lorem ipsum dolor sit amit</p>
							</div>
						</div><hr/>
						<div class="row">
							<div class="col-md-12 announcement-footer">
								<button type="button" class="btn btn-primary read-button">Noted</button>
								<a href="#" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Xavier <br/> David <br/> Jude <br/> Chris" class="read-tag">4 Noted</a>
							</div>
						</div>
					</div>
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

		<!-- Optionally, you can add Slimscroll and FastClick plugins.
			 Both of these plugins are recommended to enhance the
			 user experience. Slimscroll is required when using the
			 fixed layout. -->
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();   
			});
		</script>
	</body>
</html>
