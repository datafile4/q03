<?php
		ini_set('display_errors', 1);
		error_reporting(E_ALL);
		include 'templates/myAccount.php';
		include 'templates/navbar.php';
		include_once("templates/allprojects_top.html");
		include_once("functions.inc");
		createAllProjectsTable();
		include_once("templates/allprojects_bottom.html");
	?>
