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
					
					<div class="container">

						<div class="row">

							<div class = "col-md-12">
							<center>
								<img src = "media/profile-pictures/no-image.png" class="circle-logo"/>
							</center>
							</div>
						
						</div>

						<div class = "row" style="margin-bottom:25px;">
							<div class = "col-md-6 col-xs-12 col-lg-6 col-sm-12">
								<h2 class = "titleheading"> VISION </h2>
								<hr class = "line-heading" />
									<p class = "about-content col-sm-12">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec tincidunt felis, sit amet luctus lorem. Proin condimentum mollis magna, sit amet pulvinar nisl luctus ut. Sed vehicula metus et velit viverra elementum. Sed elementum blandit metus, quis porttitor urna bibendum non. Maecenas imperdiet, enim id pulvinar venenatis, mauris ex hendrerit massa, a mattis dolor erat a diam. Suspendisse ut elit ac eros aliquam commodo. Praesent venenatis, ligula eget semper finibus, nunc tortor pharetra nisi, elementum ultricies lacus ante sed sem.
									</p>
							</div>

							<div class = "col-md-6 col-xs-12 col-lg-6 col-sm-12">
								<h2 class = "titleheading"> MISSION </h2>
								<hr class = "line-heading" />
									<p class = "about-content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec tincidunt felis, sit amet luctus lorem. Proin condimentum mollis magna, sit amet pulvinar nisl luctus ut. Sed vehicula metus et velit viverra elementum. Sed elementum blandit metus, quis porttitor urna bibendum non. Maecenas imperdiet, enim id pulvinar venenatis, mauris ex hendrerit massa, a mattis dolor erat a diam. Suspendisse ut elit ac eros aliquam commodo. Praesent venenatis, ligula eget semper finibus, nunc tortor pharetra nisi, elementum ultricies lacus ante sed sem.
									</p>
							</div>
						</div>

						<div class = "row" style="margin-bottom:25px;">
							<div class = "col-md-6">
								<h2 class = "titleheading"> HISTORY </h2>
								<hr class = "line-heading" />
									<p class = "about-content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec tincidunt felis, sit amet luctus lorem. Proin condimentum mollis magna, sit amet pulvinar nisl luctus ut. Sed vehicula metus et velit viverra elementum. Sed elementum blandit metus, quis porttitor urna bibendum non. Maecenas imperdiet, enim id pulvinar venenatis, mauris ex hendrerit massa, a mattis dolor erat a diam. Suspendisse ut elit ac eros aliquam commodo. Praesent venenatis, ligula eget semper finibus, nunc tortor pharetra nisi, elementum ultricies lacus ante sed sem.
									</p>
							</div>

							<div class = "col-md-6">
								<h2 class = "titleheading"> PURPOSE </h2>
								<hr class = "line-heading" />
									<p class = "about-content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec tincidunt felis, sit amet luctus lorem. Proin condimentum mollis magna, sit amet pulvinar nisl luctus ut. Sed vehicula metus et velit viverra elementum. Sed elementum blandit metus, quis porttitor urna bibendum non. Maecenas imperdiet, enim id pulvinar venenatis, mauris ex hendrerit massa, a mattis dolor erat a diam. Suspendisse ut elit ac eros aliquam commodo. Praesent venenatis, ligula eget semper finibus, nunc tortor pharetra nisi, elementum ultricies lacus ante sed sem.
									</p>
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
