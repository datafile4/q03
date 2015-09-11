<!doctype html>
	<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	?>
<html>
	<head>
		<title>Team Members</title>
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
							<div class="form-group col-md-2">
								<input type="text" class="form-control" placeholder="Full Name" aria-describedby="basic-addon1">
							</div>

							<div class="form-group col-md-2">
								<input type="text" class="form-control" placeholder="Group Name" aria-describedby="basic-addon1">
							</div>

							<div class="form-group col-md-2">
								<input type="text" class="form-control" placeholder="E-mail" aria-describedby="basic-addon1">
							</div>

							<button type="submit" class="btn btn-primary">Search</button>

							<button type="submit" class="btn btn-success"><i class="fa fa-plus fa-fw"></i>Add Team Member</button>

							<button type="submit" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i>Manage Groups</button>
						</div>


						<!-- Detailed section -->
						<div class="well well-sm">
							<div class="table-responsive">
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th>Pic</th>
											<th><a href="#">Full Name <i class="fa fa-sort fa-fw"></i></a></th>
											<th><a href="#">Group <i class="fa fa-sort fa-fw"></i></a></th>
											<th>Telephone</th>
											<th>Email address</th>
											<th>Job Title</th>
											<th>Last Active</th>
											<th class="text-center"><i class="fa fa-bars fa-fw"></i></th>
										</tr>
									</thead>
									<?php
										include_once("functions.inc");
										$tm_array = array(0=>array('pic'=>'<img src="imgs/1.jpg" height="35" width="35" alt="..." class="img-circle">','full_name'=>'Fred Marks','group'=>'Administrator','telephone'=>'210-829-1278','email_address'=>'admin@nextloop.net','job_title'=>'Manager','last_active'=>'2015-08-31 05:11:26'));
										createTMTable($tm_array);
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
