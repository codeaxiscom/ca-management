<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">

		<!-- Sidebar user panel (optional) -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo $_SESSION['profile_picture'] . '?' . time(); ?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?php echo $_SESSION['username']; ?></p>
				<!-- Status -->
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>

		<!-- search form (Optional) -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->

		<?php
			$pa = basename($_SERVER['PHP_SELF']);
		?>
		<!-- Sidebar Menu -->
		<ul class="sidebar-menu">
			<li class="header">MAIN NAVIGATION</li>
			<!-- Optionally, you can add icons to the links -->
			<?php if($_SESSION['usertype'] == 'A'): ?>
				<li <?php if($pa == "main.php") echo "class='active'"; ?>><a href="main.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
				<li><a href="projects.php"><i class="fa fa-folder-open"></i> <span>Projects</span></a></li>
				<li><a href="inventory.php"><i class="fa fa-wrench"></i> <span>Inventory</span></a></li>
				<li><a href="finances.php"><i class="fa fa-money"></i> <span>Finances</span></a></li>
				
				<?php
					$toptreeview_class = "treeview";
					if($pa == "employees.php" ||
						$pa == "employee-new.php" ||
						$pa == "profile.php")
						$toptreeview_class .= " active";
				?>
				<li class="<?php echo $toptreeview_class; ?>">
					<a href="#"><i class="fa fa-user"></i> <span>Employees</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<?php
						$treeview_class = "treeview-menu";
						if($pa == "employees.php" ||
							$pa == "employee-new.php" ||
							$pa == "profile.php")
							$treeview_class .= " menu-open"
					?>
					<ul class="<?php echo $treeview_class; ?>">
						<li <?php if($pa == "employees.php") echo "class='active'"; ?>><a href="employees.php">All Employees</a></li>
						<li <?php if($pa == "employee-new.php") echo "class='active'"; ?>><a href="employee-new.php">Add New</a></li>
						<li <?php if($pa == "profile.php") echo "class='active'"; ?>><a href="profile.php">Your Profile</a></li>
					</ul>
				</li>
				
				<li><a href="#"><i class="fa fa-exclamation"></i> <span>Announcements</span></a></li>
				
				<li class="treeview">
					<a href="#"><i class="fa fa-gear"></i> <span>Settings</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="#">General</a></li>
						<li><a href="#">Link in level 2</a></li>
					</ul>
				</li>
				
				<li><a href="#"><i class="fa fa-group"></i> <span>All About CodeAxis</span></a></li>
			<?php endif; ?>
		</ul>
		<!-- /.sidebar-menu -->
	</section>
	<!-- /.sidebar -->
</aside>