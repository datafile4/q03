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
		<link rel="stylesheet" href="css/superhero.bootstrap.min.css">
		<link rel="stylesheet" href="css/style_flex.css">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>


		<!-- Main section -->
		<div class="container full">
			<!-- Section space -->
			<div class="main">

				<div class="panel-primary">
					<div class="panel-body">

						<div class="well well-sm">
							<div class="form-group col-md-3">
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

							<a href="addProject.php" type="submit" class="btn btn-success"><i class="fa fa-plus fa-fw"></i>Add new Project</a>
						</div>

						<div class="well well-sm">
							<div class="table-responsive">
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th><a href="#">Full Name <i class="fa fa-sort fa-fw"></i></a></th>
											<th class="text-center"><a href="#">Client<i class="fa fa-sort fa-fw"></i></a></th>
											<th class="text-center">Deadline</th>
											<!-- <th class="text-center"><a href="#"> Progress<i class="fa fa-sort fa-fw"></i></a></th> -->
											<!-- <th class="text-center">Time Spent</th> -->
											<th class="text-center">Status</th>
											<th class="text-center"><i class="fa fa-bars fa-fw"></i></th>
										</tr>
									</thead>
										<?php
											include_once("functions.inc");
											createAllProjectsTable();
										?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Main section -->
		<!-- Account info -->
		<?php include 'myAccount.php'; ?>
		<!-- Account Info -->

		<!-- NavBar -->
		<?php include 'navbar.php'; ?>
		<!-- //NavBar -->
	</body>
</html>
