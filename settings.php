<!doctype html>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Settings</title>
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
								<button type="button" class="btn btn-default active"><a href="settings.php"><i class="fa fa-wrench"></i></a></button>
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
							<span class="panel-title" class="sectionName"><i class="fa fa-wrench"></i> Settings</span>

						<!-- panel_menu -->
						<span class="col-md-offset-8">
							<div class="btn-group" role="group" aria-label="...">
								<button type="button" class="btn btn-default"><a href="myprojects.php"><i class="fa fa-folder-open-o"></i></a></button>
								<button type="button" class="btn btn-default"><a href="mytimers.php"><i class="fa fa-clock-o"></i></a></button>
								<button type="button" class="btn btn-default"><a href="mytasks.php"><i class="fa fa-list-ul"></i></a></button>
								<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-default"><a href="#"><i class="fa fa-cogs"></i></a></button>
								<button type="button" class="btn btn-default active"><a href="settings.php"><i class="fa fa-wrench"></i></a></button>
								<button type="button" class="btn btn-default"><a href="#"><i class="fa fa-power-off"></i></a></button>
							</div>
						</span>
						<!-- panel_menu -->

					</div>
					<!-- //main_heading -->

					<div class="panel-body">




						<!-- Detailed section -->
						<div class="well well-sm detailed col-md-12 ">
		<!-- created tab -->
	<div class="">
 			<ul class="nav nav-tabs">
    			<li class="active"><a data-toggle="tab" href="#home">General</a></li>
    			<li><a data-toggle="tab" href="#menu1">Company</a></li>
    			<li><a data-toggle="tab" href="#menu2">Updates</a></li>
    			<li><a data-toggle="tab" href="#menu3">Email templates</a></li>
			</ul>

		<div class="tab-content">

			<div id="home" class="tab-pane fade in active">
				<h3>General Settings</h3><hr>
					<table class="table table-hover">
 						<tr>
 							<td>Item</td>
 							<td>Value</td>
 						</tr>
 						<tr>
 							<td>Dashboard Title</td>
 							<td><input type="text" class="form-control textInput" placeholder="Text input"></td>
 						</tr>
 						<tr>
 							<td>Show Information Tip</td>
 							<td>
 							<!-- dropdown -->
 								<div class="dropdown  dropDownSize">
									<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									No<span class="caret"></span>
									</button>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    										<li><a href="#">No</a></li>
    										<li><a href="#">Yes</a></li>
										</ul>
								</div>
							<!-- dropdown -->
 							</td>
 						</tr>
					</table>
			</div>


			<div id="menu1" class="tab-pane fade">
				<h3>Company Details</h3><hr>
					<table class="table table-hover">
						<tr>
							<td>Item</td>
							<td>Value</td>
						</tr>
						<tr>
							<td>System Email*</td>
							<td><input type="text" class="form-control textInput" placeholder="you@somecompnay.ccc"></td>
						</tr>
						<tr>
							<td>City</td>
							<td><input type="text" class="form-control textInput" placeholder="Some city"></td>
						</tr>
						<tr>
							<td>Telephone</td>
							<td><input type="text" class="form-control textInput" placeholder="000000000"></td>
						</tr>
						<tr>
							<td>Company Name*</td>
							<td><input type="text" class="form-control textInput" placeholder="Some Company Inc"></td>
						</tr>
						<tr>
							<td>Email Signature*</td>
							<td><input type="text" class="form-control textInput" placeholder="Text"></td>
						</tr>
					</table>
			</div>


			<div id="menu2" class="tab-pane fade">
				<h3>Updates</h3><hr>
					<table class="table table-hover">
						<tr>
							<td><b>Your Version</b></td>
							<td><b>Latest Version</b></td>
						</tr>
						<tr>
							<td>1.05</td>
							<td>---</td>
						</tr>
					</table>
			</div>


			<div id="menu3" class="tab-pane fade">
				<h3>Email templates(clients)</h3>
				<button type="button" class="positionRel buttonClientTemp btn btn-primary">Client Templates</button>
				<button type="button" class="positionRel buttonAdminTemp btn btn-success">Admin Template</button><hr>
			</div>
		</div>
		</div>


		<!-- created tab -->
						</div>
					</div>
					</div>
					</div>
					</div>
					</body>
			<!-- //Main section -->
	</html>