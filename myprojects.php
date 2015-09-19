	<?php
			ini_set('display_errors', 1);
			error_reporting(E_ALL);
		 	include_once("functions.inc");
			include 'templates/myAccount.php';
			include 'templates/navbar.php';
			include("templates/myProjects_top.html");
			$myProjects = array(0=>array('#'=>0,'project'=>'Web-design','client'=>'Open client','deadline'=>'30-04-2015','progress' =>50,'my-time'=>'20:43:10','my_tasks'=>'9','status'=>'In progress'));
			createMyProjectsTable($myProjects);
			include("templates/myProjects_bottom.html");
		?>
