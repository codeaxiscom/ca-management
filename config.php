<?php
		$host = "localhost"; // Host name 
		$username = "root"; // Mysql username 
		$password = ""; // Mysql password 
		$db_name = "ca_management_db"; // Database name 
		
		$connection = new mysqli($host, $username, $password, $db_name);
		
		session_start(); 
?>