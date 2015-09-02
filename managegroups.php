<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Groups</title>
		<script src="jquery/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style_flex.css">
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
								<button type="button" class="btn btn-default"><a href=""><i class="fa fa-clock-o"></i></a></button>
								<button type="button" class="btn btn-default  active"><a href="managegroups.php"><i class="fa fa-sitemap"></i></a></button>
								<button type="button" class="btn btn-default"><a href=""><i class="fa fa-wrench"></i></a></button>
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

				<div class="panel panel-primary"><!-- panel_start -->
					<!-- main_heading -->
					<div class="panel-heading">
							<span class="panel-title" class="sectionName"><i class="fa fa-sitemap"></i> Groups</span>

						<span class="col-md-offset-8">
							<div class="btn-group" role="group" aria-label="...">
								<button type="button" class="btn btn-default"><a href="#"><i class="fa fa-folder-open-o"></i></a></button>
								<button type="button" class="btn btn-default"><a href="#"><i class="fa fa-clock-o"></i></a></button>
								<button type="button" class="btn btn-default"><a href="#"><i class="fa fa-list-ul"></i></a></button>
								<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-default"><a href="#"><i class="fa fa-cogs"></i></a></button>
								<button type="button" class="btn btn-default"><a href="#"><i class="fa fa-wrench"></i></a></button>
								<button type="button" class="btn btn-default"><a href="#"><i class="fa fa-power-off"></i></a></button>
							</div>
						</span>

					</div>
					<!-- //main_heading -->


					<div class="panel-body">

						<div class=" well well-sm">
							<div class="userName ">
								<h4>Manage Groups</h4>
							</div>
						</div>

						<div class="well">
					      <div id="table-section">
					        <table class="table table-striped">
					          <thead>
					            <th><a href="#">ID<i class="fa fa-sort"></i></a></th>
					            <th><a href="#">Group Name<i class="fa fa-sort"></i></a></th>
					            <th>Team Members</th>
					            <th><i class="fa fa-bars"></i></th>
					          </thead>
					          <?php
					            include_once("functions.inc");
					            $manage_groups_array = array(0=>array('id'=>0,'group_name'=>'Loosers','team_members'=>1,'groups'=>array('Permission','Migrate','Kefir')));
					            manageGroupsTable($manage_groups_array);
					          ?>
					        </table>
					      </div>

							<div class="col-md-offset-10" id="addButton-section">
							    <button type="button" class="btn btn-success" ><i class="fa fa-plus"></i>Add New Group</button>
							</div>
						</div>



					      <div class="" id="alerts-section" >
					        <div class="alert alert-info" style="margin-bottom:10px;">
					           [Administrators] have Global permissions which do not need to be changed/modified here
					        </div>
					        <div class="alert alert-info" style="margin-bottom:10px;">
					           [IMPORTANT] For security and practical reasons, some categories have 'minimum' and 'maximum' seculrity LEVELS. <br>Example: [CLIENTS] permissions cannot be set above [1]....[My PROJECT DETAILS] cannot be set below [1]
					        </div>
					      </div>

					</div>
					</div><!-- panel_end -->



				</div>
			</div>
			<!-- //Main section -->
		</body>
	</html>