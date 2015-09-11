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
					<!-- main_heading -->
					<div class="panel-body">
						<div class=" well well-sm">
							<div class="form-group col-md-3">
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

							<button type="submit" class="btn btn-success"><i class="fa fa-plus fa-fw"></i>Add new task</button>

						</div>

						<div class="well well-sm">
							<div class="table-section">
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th><a href="#">Task ID<i class="fa fa-sort fa-fw"></i></a></th>
											<th><a href="#">Project ID<i class="fa fa-sort fa-fw"></i></a></th>
											<th>Title</th>
											<th>Start Date</th>
											<th><a href="#">Date Due<i class="fa fa-sort fa-fw"></i></a></th>
											<th><a href="#">Status</a><i class="fa fa-sort fa-fw"></i></th>
											<th class="text-center"><i class="fa fa-bars fa-fw"></i></th>
										</tr>
									</thead>
										<?php
											$my_tasks_array = array(0=>array('ID'=>2,'project_id'=>1,'task_title'=>'Convert','start_date'=>'18-12-2014',
											'date_due'=>'20-12-2014','status'=>'<span class="label label-danger">Behind</span>'));
											include_once("functions.inc");
											createMyTasksTable($my_tasks_array);
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
