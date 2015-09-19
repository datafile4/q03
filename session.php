<?php
	//file for start or end user's session
	require("connection.php");
	$user_session_status=true;
	//check, if session is exists
	if (!isset($_SESSION['username'])){
			session_start();
			$login_username = $_POST['username'];
			$login_password = $_POST['passsword'];
			$_SESSION['username'] = $login_username;
			$_SESSION['passsword'] = $login_password;
			$user_session_status = true;
			header("Location: dashboard.php");
	}

?>
