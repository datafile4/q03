<?php
	//file for start or end user's session
	require("connection.php");
	$login_username = $_POST['username'];
	$login_password = $_POST['password'];
	$check = $login->checkLogin($login_username,$login_password);
	if($check){
		header("Location: dashboard.php");
	} else {
		header("Location: index.php");
	}
?>
