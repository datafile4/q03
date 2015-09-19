	<?php
			ini_set('display_errors', 1);
			error_reporting(E_ALL);
			include 'templates/myAccount.php';
			include 'templates/navbar.php';
			include("functions.inc");
			include ("templates/myTimers_top.html");
			$my_project_timers_array = array(0=>(array('project_name'=>0,'name'=>'Fred Marks','Time'=>'0 : 10 : 52')));
			createMyTimersTable($my_project_timers_array);
			include ("templates/myTimers_bottom.html");
		?>
