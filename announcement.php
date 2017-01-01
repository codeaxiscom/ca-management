<?php
	include('config.php');
	
	if(!isset($_SESSION['is_logged_in'])) {
		header("Location: index.php");
	}

	if(isset($_POST['postAnnouncementBtn'])) {
		global $connection;
		$senderID = $_SESSION['userID'];
		$subject = $_POST['subject'];
		$announcement = $_POST['Message'];

		$sql = "INSERT INTO announcement(UserID,Subject,Message) VALUES ($senderID,'$subject','$announcement')";
		$success = false;

		if($connection->query($sql)) {
			$success = true;
		}
	}

	if(isset($_POST['deleteAnnouncement'])) {
		global $connection;
		$annID = $_POST['deleteAnnouncement'];
		$sql = "DELETE FROM announcement WHERE AnnouncementID = $annID";
		$success = false;

		if($connection->query($sql)) {
			$success = true;
		}		
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
						<button type="button" class="btn btn-primary new-announcement" data-toggle="modal" data-target="#add-announcement-modal">New Announcement</button>
					</h1>
						<!--------------- ADD NEW ANNOUNCEMENT MODAL ---------------->
							<div class="modal fade" id="add-announcement-modal" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">New Announcement</h4>
										</div>
										<div class="modal-body">
											<span class="date-message">Date: <?php echo date('F d, Y'); ?></span><hr/>
											<form action="" method="POST">
												<input type="text" class="subject-input" name="subject" placeholder="Subject">
												<textarea rows="10" class="textarea-input" name="Message" placeholder="Your Announcement"></textarea>											
											
										</div>
										<div class="modal-footer">
											<input type="submit" class="btn btn-primary send-button" name="postAnnouncementBtn" value="Post"/>
											</form>
										</div>
									</div>
								</div>
							</div>
					<ol class="breadcrumb">
						<li><a href="main.php"><i class="fa fa-dashboard"></i> Home</a></li>
						<li class="active">Announcements</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
					<?php
						$sql = "SELECT FirstName,LastName,ProfilePicture,Subject,Message,AnnouncementID,(UNIX_TIMESTAMP(DatePosted)) AS DatePosted FROM announcement LEFT JOIN user ON user.UserID = announcement.UserID ORDER BY announcement.AnnouncementID DESC";
						$results = $connection->query($sql);
						date_default_timezone_set('Hongkong');
						while($result = $results->fetch_assoc()) { ?>
							<?php $annID = $result['AnnouncementID']; ?>
							<div class="container announcement-container">
								<div class="row">
									<div class="col-md-8 announcement-heading">
										<img src="<?php echo $result['ProfilePicture']; ?>" class="img-responsive announcement-image">
										<div class="heading-text">
											<h4><?php echo $result["FirstName"] . " " . $result["LastName"]; ?></h4>
											<?php
												$timeAgo = time() - $result["DatePosted"];
												if($timeAgo < 60) {
													$timeAgo = "Just now";
												} else if($timeAgo < 3600) {
													$timeAgo = floor($timeAgo/60);
													$timeAgo .= " min";
													if($timeAgo > 1) {
														$timeAgo .= "s";
													}
												} else if($timeAgo < 86400) {
													$timeAgo = floor($timeAgo/3600);
													$timeAgo .= " hr";
													if($timeAgo > 1) {
														$timeAgo .= "s";
													}
												} else if($timeAgo < 604800) {
													$hours = floor($timeAgo / 3600);
													$mins = floor($timeAgo / 60 % 60);
													if($hours < 12){
														$timeAgo = "Yesterday at" . "$hours" . ":" . "$mins" . "am";
													} else if($hours < 13) {
														$timeAgo = "Yesterday at" . "$hours" . ":" . "$mins" . "pm";
													} else if($hours < 24) {
														$hours = $hours - 12;
														$timeAgo = "Yesterday at" . "$hours" . ":" . "$mins" . "pm";
													}
												} else {	
													$format = 'F d, Y h:i a';
													$timeAgo = date($format,$result["DatePosted"]);	
												}	
											?>
											<h5><?php echo $timeAgo ?></h5>											
										</div>
									</div>
									<div class="col-md-4 heading-button">
										<button type="button" class="btn btn-danger delete-button" data-toggle="modal" data-target="<?php echo '#myModal'.$annID;?>">Delete</button>
											<div id="<?php echo 'myModal'.$annID; ?>" class="modal fade" role="dialog">
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
															<form action="" method="POST">
																<button type="submit" class="btn btn-danger" tabindex="-1" name="deleteAnnouncement" value="<?php echo $annID; ?>" onClick='getValue()'>Yes</button>
																<button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
															</form>
														</div>
													</div>
												</div>
											</div>
										<button type="button" class="btn btn-primary edit-button">Edit</button>
									</div>
								</div><hr/>
								<div class="row">
									<div class="col-md-12">
										<h3><?php echo $result["Subject"]; ?></h3>
										<p><?php echo $result["Message"]; ?></p>
									</div>
								</div><hr/>
								<div class="row">
									<div class="col-md-12 announcement-footer">
										<form action="" method="POST">
											<button type="button" class="btn btn-primary read-button" name="notedBtn">Noted</button>
											<a href="#" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Xavier <br/> David <br/> Jude <br/> Chris" class="read-tag" value="4">4 Noted</a>
										</form>
									</div>
								</div>
							</div>
						<?php }
					?>				
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
		<script src="js/announcement.js"></script>
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
