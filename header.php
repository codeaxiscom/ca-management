
<!-- Main Header -->
<header class="main-header">

	<!-- Logo -->
	<a href="index.php" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>CA</b></span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>Code</b>Axis</span>
	</a>

	<!-- Header Navbar -->
	<nav class="navbar navbar-static-top" role="navigation">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>
		<!-- Navbar Right Menu -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<?php
					$userID = $_SESSION['userID'];
					$sql = "SELECT COUNT(*) AS count FROM message WHERE UserID=$userID AND viewed=0";
					$result = $connection->query($sql);
					$countMessageNotViewed = $result->fetch_assoc()['count'];
					
					$sql = "SELECT message,date,nickname,profilepicture FROM message LEFT JOIN user ON message.senderID=user.userID WHERE message.userID=$userID ORDER BY date DESC LIMIT 5";
					$results = $connection->query($sql);
				?>
				<!-- Messages: style can be found in dropdown.less-->
				<li class="dropdown messages-menu">
					<!-- Menu toggle button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-envelope-o"></i>
						<span class="label label-success"><?php if($countMessageNotViewed > 0) echo $countMessageNotViewed; ?></span>
					</a>
					<ul class="dropdown-menu">
						<?php
							if($countMessageNotViewed == 0) {
								$message = "You don't have any messages.";
							} else if($countMessageNotViewed == 1) {
								$message = "You have $countMessageNotViewed message.";
							} else {
								$message = "You have $countMessageNotViewed messages.";
							}
						?>
						<li class="header"><?php echo $message; ?></li>
						<li>
							<!-- inner menu: contains the messages -->
							<ul class="menu">
								<?php
									/* Start Messages */
									while($result = $results->fetch_assoc()) {
										if(strlen($result['message']) > 29)
											$result['message'] = substr($result['message'],0,29) . '...'; 
										$diff = date()-$result['date'];
										echo '<li>';
											echo '<a href="#">';
												echo '<div class="pull-left">';
													echo '<img src="'.$result['profilepicture'].'" class="img-circle" alt="User Image">';
												echo '</div>';

												echo '<h4>';
													echo $result['nickname'];
													echo '<small><i class="fa fa-clock-o"></i> '. $diff .'</small>';
												echo '</h4>';

												echo '<p>' . $result['message'] . '</p>';
											echo '</a>';
										echo '</li>';
									}
									/* End Messages */
								?>
							</ul>
							<!-- /.menu -->
						</li>
						<li class="footer"><a href="#">See All Messages</a></li>
					</ul>
				</li>
				<!-- /.messages-menu -->

				<!-- Notifications Menu -->
				<li class="dropdown notifications-menu">
					<!-- Menu toggle button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-bell-o"></i>
						<span class="label label-warning">10</span>
					</a>
					
					<ul class="dropdown-menu">
						<li class="header">You have 10 notifications</li>
						<li>
							<!-- Inner Menu: contains the notifications -->
							<ul class="menu">
								<li>
									<!-- start notification -->
									<a href="#">
										<i class="fa fa-users text-aqua"></i> 5 new members joined today
									</a>
								</li>
							<!-- end notification -->
							</ul>
						</li>
						<li class="footer"><a href="#">View all</a></li>
					</ul>
				</li>
				
				<!-- Tasks Menu -->
				<li class="dropdown tasks-menu">
					<!-- Menu Toggle Button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-flag-o"></i>
						<span class="label label-danger">9</span>
					</a>
					<ul class="dropdown-menu">
						<li class="header">You have 9 tasks</li>
						<li>
							<!-- Inner menu: contains the tasks -->
							<ul class="menu">
								<li><!-- Task item -->
									<a href="#">
										<!-- Task title and progress text -->
										<h3>
											Design some buttons
											<small class="pull-right">20%</small>
										</h3>
										
										<!-- The progress bar -->
										<div class="progress xs">
											<!-- Change the css width attribute to simulate progress -->
											<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">20% Complete</span>
											</div>
										</div>
									</a>
								</li>
							<!-- end task item -->
							</ul>
						</li>
						<li class="footer">
							<a href="#">View all tasks</a>
						</li>
					</ul>
				</li>
				
				<!-- User Account Menu -->
				<li class="dropdown user user-menu">
					<!-- Menu Toggle Button -->
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!-- The user image in the navbar-->
						<img src="<?php echo $_SESSION['profile_picture'] . '?' . time(); ?>" class="user-image" alt="User Image">
						<!-- hidden-xs hides the username on small devices so only the image appears. -->
						<span class="hidden-xs"><?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?></span>
					</a>
					<ul class="dropdown-menu">
						<!-- The user image in the menu -->
						<li class="user-header">
							<img src="<?php echo $_SESSION['profile_picture'] . '?' . time(); ?>" class="img-circle" alt="User Image">

							<p>
								<?php echo  $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] . ' - ' . $_SESSION['position']; ?>
								<small>Member since <?php echo $_SESSION['membership_date']; ?></small>
							</p>
						</li>
						
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-left">
								<a href="profile.php" class="btn btn-default btn-flat">Profile</a>
							</div>
							<div class="pull-right">
								<a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>