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
		<link rel="stylesheet" href="includes/dist/css/skins/skin-blue.min.css">
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
						All Employees
					</h1>
					<a href="employee-new.php"><button type="button" class="btn btn-block btn-default add-new">Add New</button></a>
					
					<ol class="breadcrumb">
						<li><a href="main.php"><i class="fa fa-dashboard"></i> Home</a></li>
						<li>Employees</li>
						<li class="active">All Employees</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
					<div class="box">
						<div class="box-header">
						  <h3 class="box-title">Employees</h3>
						  <div class="box-tools">
							<div class="input-group input-group-sm" style="width: 150px;">
							  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

							  <div class="input-group-btn">
								<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
							  </div>
							</div>
						  </div>
						</div>
						<!-- /.box-header -->
						<div class="box-body table-responsive no-padding">
						  <table class="table table-striped">
							<tbody><tr>
							  <th>Username</th>
							  <th>Name</th>
							  <th>Email</th>
							  <th>Mobile Number</th>
							  <th>Position</th>
							  <th>User Type</th>
							  <th>Actions</th>
							</tr>
							
							<?php
								$sql = "SELECT username, firstname, lastname, email, phonenumber, position, usertype FROM USER";
								$results = $connection->query($sql);
								
								while($result = $results->fetch_assoc()) {
									if($result['username'] == $_SESSION['username']) continue;
									echo '<tr>';
										echo '<td>' . $result['username'] . '</td>';
										echo '<td>' . $result['firstname'] . ' ' . $result['lastname'] . '</td>';
										echo '<td>' . $result['email'] . '</td>';
										echo '<td>' . $result['phonenumber'] . '</td>';
										echo '<td>' . $result['position'] . '</td>';
										echo '<td>' . $result['usertype'] . '</td>';
										echo '<td class="actions"><a href="employee-profile.php?username=' . $result['username'] . '">View</a>
													<a href="#">Remove</a></td>';
									echo '</tr>';
								}
							?>
						  </tbody></table>
						</div>
						<!-- /.box-body -->
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
		<script src="js/index.js"></script>
		<!-- Optionally, you can add Slimscroll and FastClick plugins.
			 Both of these plugins are recommended to enhance the
			 user experience. Slimscroll is required when using the
			 fixed layout. -->
	</body>
</html>
