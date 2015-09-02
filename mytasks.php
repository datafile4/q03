<!doctype html>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<html>

	<head>
		<meta charset="UTF-8">
		<title>My Tasks</title>
		<script src="jquery/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style_flex.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<!-- Account info -->
		<?php include 'myAccount.php'; ?>
		<!-- Account Info -->
		<!-- Main section -->
		<div class="boxWidth container">

		<!-- Sidebar -->
				<div class="mySideBar panel panel-primary">
					<div class="panel-heading panel-height">
						<h3 class="panel-title text-center " style="margin-top:8px">Freelance Dashboard</h3>
					</div>
					<div class="panel-body">
						<!-- Sidebar menu -->
						<div class="text-center">
							<div class="btn-group" role="group" aria-label="...">
								<button type="button" class="btn btn-default"><a href="allprojecttasks.php"><i class="fa fa-list-ul"></i></a></button>
								<button type="button" class="btn btn-default"><a href="mytimers.php"><i class="fa fa-clock-o"></i></a></button>
								<button type="button" class="btn btn-default"><a href="managegroups.php"><i class="fa fa-sitemap"></i></a></button>
								<button type="button" class="btn btn-default"><a href="settings.php"><i class="fa fa-wrench"></i></a></button>
							</div>
						</div>
						<!-- //Sidebar menu -->

						<!-- Sidebar sections -->
						<div class="list-group myMargin">
							<a href="index.php" class="list-group-item"><i class="fa fa-home"></i><span class="col-md-offset-1">Dashboard</span></a>
							<a href="myprojects.php" class="list-group-item"><i class="fa fa-folder-open-o"></i><span class="col-md-offset-1">My Projects</span><span class="badge progress-bar-info">4</span></a>
							<a href="allprojects.php" class="list-group-item"><i class="fa fa-folder-open"></i><span class="col-md-offset-1">All Projects</span><span class="badge progress-bar-info">4</span></a>
							<a href="clients.php" class="list-group-item"><i class="fa fa-user"></i><span class="col-md-offset-1">Clients</span><span class="badge progress-bar-info">4</span></a>
							<a href="teammembers.php" class="list-group-item"><i class="fa fa-users"></i><span class="col-md-offset-1">Team Members</span></a>
						</div>
						<!-- //Sidebar sections -->
					</div>
				</div>
		<!-- //Sidebar -->

			<!-- Section space -->
			<div class="main col-md-offset-2">

				<div class="panel panel-primary">
					<!-- main_heading -->
					<div class="panel-heading">
							<span class="panel-title" class="sectionName"><i class="fa fa-list-ul"></i> My Tasks</span>

						<!-- panel_menu -->
						<span class="col-md-offset-8">
							<div class="btn-group" role="group" aria-label="...">
								<button type="button" class="btn btn-default"><a href="myprojects.php"><i class="fa fa-folder-open-o"></i></a></button>
								<button type="button" class="btn btn-default"><a href="mytimers.php"><i class="fa fa-clock-o"></i></a></button>
								<button type="button" class="btn btn-default   active"><a href="mytasks.php"><i class="fa fa-list-ul"></i></a></button>
								<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-default"><a href="#"><i class="fa fa-cogs"></i></a></button>
								<button type="button" class="btn btn-default"><a href="settings.php"><i class="fa fa-wrench"></i></a></button>
								<button type="button" class="btn btn-default"><a href="#"><i class="fa fa-power-off"></i></a></button>
							</div>
						</span>
						<!-- panel_menu -->

					</div>
					<!-- //main_heading -->

					<div class="panel-body">

						<div class=" well well-sm">
						<div class="">
					      <div class="titlebar">
					         <div class="input-group pull-left">
								<input type="text" class="form-control" placeholder="Task title" aria-describedby="basic-addon1">
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Project Name <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Project Name</a></li>
								</ul>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Task Status <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Task Status</a></li>
								</ul>
							</div>
					          <button type="submit" class="btn btn-primary">Search My Tasks</button>
					          <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>Add new task</button>
					      </div>
						</div>
						</div>


						<!-- Detailed section -->
						<div class="well well-sm detailed col-md-12 ">
							<?php
					          $myProjects = array(0=>array('#'=>0,'project'=>'Web-design','client'=>'Open client','deadline'=>'30-04-2015','progress' =>50,'my-time'=>'20:43:10','my_tasks'=>'9','status'=>'In progress'));
					        ?>
      <div class="table-section">
        <table class="table table-striped">
          <thead>
            <th><a href="#">ID <i class="fa fa-sort"></i></a></th>
            <th><a href="#">Project ID <i class="fa fa-sort"></i></a></th>
            <th>Title</th>
            <th>Start Date</th>
            <th><a href="#">Date Due<i class="fa fa-sort"></i></a></th>
            <th><a href="#">Status</a><i class="fa fa-sort"></i></th>
    	   	  <th><i class="fa fa-bars"></i></th>
          </thead>
          <?php
            $my_tasks_array = array(0=>array('ID'=>1,'project_id'=>1,'task_title'=>'Convert','start_date'=>'18-12-2014',
            'date_due'=>'20-12-2014','status'=>'Behind'));
            include_once("functions.inc");
            createMyTasksTable($my_tasks_array);
          ?>
        </table>
      </div>
						</div>
					</div>
			<!-- //Main section -->
		</body>
	</html>