
<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	include 'templates/myAccount.php';
	include 'templates/navbar.php';
	include ("templates/myTasks_top.html");
	$my_tasks_array = array(0=>array('ID'=>2,'project_id'=>1,'task_title'=>'Convert','start_date'=>'18-12-2014',
		'date_due'=>'20-12-2014','status'=>'<span class="label label-danger">Behind</span>'));
	include_once("functions.inc");
	createMyTasksTable($my_tasks_array);
	include("templates/myTasks_bottom.html");
?>
