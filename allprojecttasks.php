<!doctype html>
	<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	?>
<html>
	<head>
		<title>All Project Tasks</title>
		<script src="jquery/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/superhero.bootstrap.min.css">
		<link rel="stylesheet" href="css/style_flex.css">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		<!-- Account info -->
		<?php include 'myAccount.php'; ?>
		<!-- Account Info -->

		<!-- NavBar -->
		<?php include 'navbar.php'; ?>
		<!-- //NavBar -->

		<!-- Main section -->
		<div class="container full">
			<!-- Section space -->
			<div class="main">

				<div class="panel-primary">
					<div class="panel-body">
						<div class=" well well-sm">
							<div class="form-group col-md-3">
								<input type="text" class="form-control" placeholder="Task title" aria-describedby="basic-addon1">
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Assigned to <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Assigned to</a></li>
								</ul>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Project Home <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Project Home</a></li>
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
						</div>

						<!-- Detailed section -->
						<div class="well well-sm">
							<div class="table-section">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>#</th>
											<th><a href="#">Project<i class="fa fa-sort fa-fw"></i></a></th>
											<th><a href="#">Title<i class="fa fa-sort fa-fw"></i></a></th>
											<th>Assigned</th>
											<th><a href="#">Date due<i class="fa fa-sort fa-fw"></i></a></th>
											<th>Status</th>
											<th class="text-center"><i class="fa fa-bars fa-fw"></i></th>
										</tr>
									</thead>
										<?php
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
										?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Main section -->
	</body>
</html>
