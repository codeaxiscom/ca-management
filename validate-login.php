<?php
	
	include('config.php');
	
	if(checkValidUser($_POST['username'], $_POST['password'])) {
		$_SESSION['is_logged_in'] = 1; //successful login
		$username = $_POST['username'];
		setUserDetails($username);
		header("Location: main.php");
	} else {
		$_SESSION['is_logged_in'] = 2; //unsuccessful login
		header("Location: index.php");
	}
	
	function checkValidUser($username, $password) {
		global $connection;
		
		$sql = "SELECT username, password FROM USER WHERE username='$username' AND password='$password'";
		$results = $connection->query($sql);

		return $results->num_rows == 1;
	}
	
	function setUserDetails($username) {
		global $connection;
		$sql = "SELECT userID, username, usertype, firstname, lastname, nickname, position, gender, age, 
					email, phonenumber, telephonenumber, biographicalinfo, membershipdate, 
					profilepicture FROM USER WHERE username = '$username'";
		$results = $connection->query($sql);
		$result = $results->fetch_assoc();

		$_SESSION['userID'] = $result['userID'];
		$_SESSION['username'] = $result['username'];
		$_SESSION['usertype'] = $result['usertype'];
		$_SESSION['first_name'] = $result['firstname'];
		$_SESSION['last_name'] = $result['lastname'];
		$_SESSION['nickname'] = $result['nickname'];
		$_SESSION['position'] = $result['position'];
		$_SESSION['gender'] = $result['gender'];
		$_SESSION['age'] = $result['age'];
		$_SESSION['email'] = $result['email'];
		$_SESSION['phone_number'] = $result['phonenumber'];
		$_SESSION['telephone_number'] = $result['telephonenumber'];
		$_SESSION['biographical_info'] = $result['biographicalinfo'];
		$_SESSION['membership_date'] = $result['membershipdate'];

		if($result['profilepicture'] != '')
			$_SESSION['profile_picture'] = $result['profilepicture'];
		else
			$_SESSION['profile_picture'] = 'media/profile-pictures/no-image.png';
	}
?>