<?php
	session_start();
	
	$error_message = "";
	
	if(isset($_SESSION['is_logged_in'])) {
		if($_SESSION['is_logged_in'] == 1)
			header("Location: main.php");
		else {
			$error_message = "Invalid Username/Password";
			session_destroy();
		}
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>CodeAxis Finance Management</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
		<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
		<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<div class="pen-title">
			<img src="media/logo.png" />
			<div class="pen-title-text">
				<h1>CodeAxis</h1><br />
				<span>Web Design & Development</span>
			</div>
		</div>
		
		<!-- Form Module-->
		<div class="module form-module">

			
			<div class="form">
				<h2>Login to your account</h2>
				<form method="POST" action="validate-login.php">
					<input type="text" name="username" placeholder="Username" autocomplete="off" required/>
					<input type="password" name="password" placeholder="Password" autocomplete="off" required/>
					<?php
						if($error_message != "") {
							echo "<h1 class='error-message'>$error_message</h1>";
						}
					?>
					<button>Login</button>
				</form>
			</div>
			
			<div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>
		</div>
		
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	</body>
</html>
