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
		<title>Finances - CodeAxis</title>
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
		<link rel="stylesheet" href="css/finances.css">

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
					<h1>Finances</h1>
					<ol class="breadcrumb">
						<li><a href="main.php"><i class="fa fa-dashboard"></i> Home</a></li>
						<li class="active">Finances</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">

					<!-- Your Page Content Here -->
						<div class="main-finances">
							<table class="main-table">
								<tr>
									<td>
										<table class="first-table">
											<tr class="first-row">
												<td class="first-heading-text"><h4>Summary</h4></td>
												<td class="first-heading-text"><h5>December 25, 2016</h5></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td>
										<table class="second-table">
												<tr class="second-row">
													<td><h4>DEBIT</h4></td>
													<td><h4>CREDIT</h4></td>
													<td><h4>OTHER EXPENSES</h4></td>
													<td><h4>GRAND TOTAL</h4></td>
												</tr>
												<tr class="third-row">
													<td><span class="question">On Hand:</span> <span class="value">₱20,000.00</span></td>
													<td><span class="question">David:</span> <span class="value">₱12,000.00</span></td>
													<td><span class="bold-text">TOTAL:</span> ₱12,000.00</td>
													<td><span class="bold-text">₱36,500.00</span></td>
												</tr>
												<tr class="fourth-row">
													<td><span class="question">BPI:</span> <span class="value">₱20,000.00</span></td>
													<td><span class="question">John:</span> <span class="value">₱12,000.00</span></td>
												</tr>
												<tr class="fifth-row">
													<td><span class="question">Paypal:</span> <span class="value">₱20,000.00</span></td>
												</tr>
												<tr class="sixth-row">
													<td><span class="question">Freelancer:</span> <span class="value">₱20,000.00</span></td>
												</tr>
												<tr class="sixth-row">
													<td><span class="bold-text">TOTAL:</span><span class="second-value">₱65,000.00</span></td>
													<td><span class="bold-text">TOTAL:</span><span class="second-value">₱16,500.00</span></td>
												</tr>
										</table>
									</td>
								</tr>
							</table>
							<table class="second-main-table">
								<tr class="payments-heading">
									<td><h4>Payments</h4></td>
									<td>
										Show: 
										<select class="form-control">
											<option>10</option>
											<option>20</option>
											<option>50</option>
											<option>100</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										<table class="payments-table">
											<tr>
												<td>Payment ID</td>
												<td>Name</td>
												<td>Date</td>
												<td>Amount</td>
											</tr>
											<tr>
												<td>1</td>
												<td>David</td>
												<td>12/23/2016</td>
												<td>₱5,000.00</td>
											</tr>
											<tr>
												<td>2</td>
												<td>John</td>
												<td>12/20/2016</td>
												<td>₱2,000.00</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<table class="third-main-table">
								<tr class="netprofit-heading">
									<td><h4>Netprofit</h4></td>
									<td>
										By: 
										<select class="form-control">
											<option>January 2017</option>
											<option>February 2017</option>
											<option>March 2017</option>
											<option>April 2017</option>
											<option>May 2017</option>
											<option>June 2017</option>
											<option>July 2017</option>
											<option>August 2017</option>
											<option>September 2017</option>
											<option>October 2017</option>
											<option>November 2017</option>
											<option>December 2017</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										<table class="netprofit-table">
											<tr>
												<td>Month</td>
												<td>Income</td>
											</tr>
											<tr>
												<td>December</td>
												<td>₱20,000.00</td>
											</tr>
											<tr>
												<td>November</td>
												<td>₱20,000.00</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<div class="first-export-button">
								<button type="button" class="btn btn-primary">Export as PDF</button>
							</div>
							<div class="second-export-button">
								<button type="button" class="btn btn-primary">Export as PDF</button>
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
