<!doctype html>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<html>

	<head>
		<title>All Projects</title>
		<script src="jquery/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style_flex.css">
		<meta charset="utf-8">
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
							<a href="allprojects.php" class="list-group-item  active"><i class="fa fa-folder-open"></i><span class="col-md-offset-1">All Projects</span><span class="badge progress-bar-info">4</span></a>
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
							<span class="panel-title" class="sectionName"><i class="fa fa-folder-open"></i> All Projects</span>

						<!-- panel_menu -->
						<span class="col-md-offset-8">
							<div class="btn-group" role="group" aria-label="...">
								<button type="button" class="btn btn-default"><a href="myprojects.php"><i class="fa fa-folder-open-o"></i></a></button>
								<button type="button" class="btn btn-default"><a href="mytimers.php"><i class="fa fa-clock-o"></i></a></button>
								<button type="button" class="btn btn-default"><a href="mytasks.php"><i class="fa fa-list-ul"></i></a></button>
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
							<div class="input-group pull-left">
								<input type="text" class="form-control" placeholder="Project ID" aria-describedby="basic-addon1">
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Project title <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Project title</a></li>
								</ul>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Client Company Name <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Client Company Name</a></li>
								</ul>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Status <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Status</a></li>
								</ul>
							</div>
							<button type="submit" class="btn btn-primary">Search Projects</button>
							<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>Add new Project</button>
						</div>


						<!-- Detailed section -->
						<div class="well well-sm detailed col-md-12 ">
								<div class="table-section">
			        <table class="table table-striped">
          <thead>
            <th>#</th>
            <th><a href="#">Full Name <i class="fa fa-sort"></i></a></th>
            <th><a href="#">Client <i class="fa fa-sort"></i></a></th>
            <th>Deadline</th>
            <th><a href="#"> Progress <i class="fa fa-sort"></i></a></th>
            <th>MyTime</th>
            <th>Status</th>
    	   	  <th><i class="fa fa-bars"></i></th>
          </thead>
          <?php
            $allProjectsArray = array(0=>array('#'=>1,'project_title'=>'Web Design','client_name'=>'Open Demo','deadline'=>'2015',
            'progress'=>18,'time_spent'=>'02:45','status'=>'In Progress'));
            include_once("functions.inc");
            createAllProjectsTable($allProjectsArray);
          ?>
        </table>
		</div>
						</div>
					</div>
			<!-- //Main section -->
		</body>
	</html>