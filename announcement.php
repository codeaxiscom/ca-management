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
						<button type="button" class="btn btn-primary">New Announcement</button>
					</h1>
					<ol class="breadcrumb">
						<li><a href="main.php"><i class="fa fa-dashboard"></i> Home</a></li>
						<li class="active">Announcements</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">

					<!-- Your Page Content Here -->
					<div class="container-fluid">
						<div class="row announcement-row">
							<div class="col-md-2">
								<img src="media/profile-pictures/jude.png" width="150px" height="150px" class="img-rounded composer-image">
							</div>
							<div class="col-md-10">
								<div class="announcement-content">
									<div class="announcement-heading">
										<h3 class="composer-name">Jemar Jude A. Maranga</h3>
										<h4 class="time-composed">2h ago</h4>
									</div>
									<blockquote>
										DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPODAVID 
										DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPODAVID GWAPO
										DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPODAVID GWAPO
										DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPODAVID 
										DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPODAVID GWAPO
										DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPODAVID GWAPODAVIDDAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPODAVID 
										DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPODAVID GWAPO
										DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPO DAVID GWAPODAVID GWAPO
									</blockquote>
								</div>
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
	</body>
</html>
