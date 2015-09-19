<!doctype html>
	<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>My Projects</title>
		<script src="jquery/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/superhero.bootstrap.min.css">
		<link rel="stylesheet" href="css/style_flex.css">
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
							<a href="#" class="label label-primary">All</a>
							<a href="#" class="label label-success">Completed</a>
							<a href="#" class="label label-info">In Progress</a>
							<a href="#" class="label label-danger">Behind Schedule</a>
						</div>

						<!-- Detailed section -->
						<div class="well well-sm">
							<div class="table-responsive">
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Project</th>
											<th>Client</th>
											<th>Deadline</th>
											<th>Progress</th>
											<th>My Time</th>
											<th>My Tasks</th>
											<th>Status</th>
										</tr>
									</thead>
										<?php
											include_once("functions.inc");
											//TODO: get from database, not working now
										 	//$myProjects = array(0=>array('#'=>0,'project'=>'Web-design','client'=>'Open client','deadline'=>'30-04-2015','progress' =>50,'my-time'=>'20:43:10','my_tasks'=>'9','status'=>'In progress'));
											createMyProjectsTable();
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
