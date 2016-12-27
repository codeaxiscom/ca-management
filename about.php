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
		<link rel="stylesheet" href="css/about.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
		<script type="text/javascript" src="js/about.js"></script>
		

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
						All About CodeAxis
					</h1>
					<ol class="breadcrumb">
						<li><a href="main.php"><i class="fa fa-dashboard"></i> Home</a></li>
						<li class="active">All About CodeAxis</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
					<div>
						<div id="header-image" class="col-md-12 col-xs-12">
							<img src = "/ca-management/media/profile-pictures/no-image.png" class="head-image"/>
							<img src = "/ca-management/media/logo.png" class="head-image2"/>
						</div>

						<div class="col-md-6 col-xs-12 about">
								<h1 class="titles">VISION</h1>
								<h4 class="clicktosee">CLICK TO SEE</h4>
								<h1 class="hovertitle">VISION</h1>

								<div class="description col-xs-12">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque vel est a malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus consequat dapibus turpis, blandit pretium diam sagittis id. Sed tristique in lorem pharetra scelerisque. Aliquam sagittis rutrum metus, id euismod nibh finibus vitae. Pellentesque dignissim faucibus felis. Pellentesque porta, neque at varius congue, felis tortor porttitor tellus, sit amet convallis nisl metus quis velit.</p>

								</div>

						</div>

						

						<div class="col-md-6 col-xs-12 about">
						
							<h1 class="titles">MISSION</h1>
							<h4 class="clicktosee">CLICK TO SEE</h4>
							<h1 class="hovertitle">MISSION</h1>
							<div class="description col-xs-12">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque vel est a malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus consequat dapibus turpis, blandit pretium diam sagittis id. Sed tristique in lorem pharetra scelerisque. Aliquam sagittis rutrum metus, id euismod nibh finibus vitae. Pellentesque dignissim faucibus felis. Pellentesque porta, neque at varius congue, felis tortor porttitor tellus, sit amet convallis nisl metus quis velit.</p>

							</div>
						
						</div>

						


						<div class="col-md-6 col-xs-12 about">
						
							<h1 class="titles">HISTORY</h1>
							<h4 class="clicktosee">CLICK TO SEE</h4>
							<h1 class="hovertitle">HISTORY</h1>
							<div class="description col-xs-12">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque vel est a malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus consequat dapibus turpis, blandit pretium diam sagittis id. Sed tristique in lorem pharetra scelerisque. Aliquam sagittis rutrum metus, id euismod nibh finibus vitae. Pellentesque dignissim faucibus felis. Pellentesque porta, neque at varius congue, felis tortor porttitor tellus, sit amet convallis nisl metus quis velit.</p>

							</div>

						</div>

						
						<div class="col-md-6 col-xs-12 about last-title">
						
							<h1 class="titles col-xs-12" style="text-align: center;">PURPOSE</h1>
							<h4 class="clicktosee">CLICK TO SEE</h4>
							<h1 class="hovertitle col-xs-12">PURPOSE</h1>
							<div class="description col-xs-12">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque vel est a malesuada. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus consequat dapibus turpis, blandit pretium diam sagittis id. Sed tristique in lorem pharetra scelerisque. Aliquam sagittis rutrum metus, id euismod nibh finibus vitae. Pellentesque dignissim faucibus felis. Pellentesque porta, neque at varius congue, felis tortor porttitor tellus, sit amet convallis nisl metus quis velit.</p>

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
