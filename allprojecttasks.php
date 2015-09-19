	<?php
		ini_set('display_errors', 1);
		error_reporting(E_ALL);
		include 'templates/myAccount.php';
		include 'templates/navbar.php';
		include "templates/allProjectsTasks_top.html";
		$allProjectsArray = array(
			0=>array(
				'#'=>1,
				'project_title'=>'Complete Website Design',
				'task_title'=>'Convert design concept in intial PSD layout',
				'assigned'=>'Emil Alasgarov',
				'date_due'=>'12.09.2015',
				'status'=>'In Progress'
				)
			);
		include_once("functions.inc");
		createAllProjectsTable($allProjectsArray);
		include ("templates/allProjectsTasks_bottom.html");
	?>
