<!doctype html>
	<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	?>
<html>
	<head>
		<title>Clients</title>
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

						<div class=" well well-sm">
							<div class="form-group col-md-3">
								<input type="text" class="form-control" placeholder="Client ID" aria-describedby="basic-addon1">
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Company Name <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Company Name</a></li>
								</ul>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								E-mail <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">E-mail</a></li>
								</ul>
							</div>

							<button type="submit" class="btn btn-primary">Search Clients</button>

							<button type="button" data-toggle="modal" data-target="#addClient" class="btn btn-success"><i class="fa fa-plus fa-fw"></i>Add new Clients</button>
						</div>


						<!-- Detailed section -->
						<div class="well well-sm">
							<div class="table-responsive">
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th><a href="#">Company Name<i class="fa fa-sort fa-fw"></i></a></th>
											<th><a href="#">Main Contact<i class="fa fa-sort fa-fw"></i></a></th>
											<th>Telephone</th>
											<th><a href="#">Projects<i class="fa fa-sort fa-fw"></i></a></th>
											<th class="text-center"><i class="fa fa-bars fa-fw"></i></th>
										</tr>
									</thead>
										<?php
										include("functions.inc");
										$clientsArray = array(0=>(array('id'=>1,'company_name'=>'La la la Inc.','main_contact'=>'Flex','telephone'=>'050 123 45 67','projects'=>1)));
										createClientsTable($clientsArray);
										?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Account info -->
		<?php include 'addClient.php';
		include 'myAccount.php';  ?>
		<!-- Account Info -->

		<!-- NavBar -->
		<?php include 'navbar.php'; ?>
		<!-- //NavBar -->
		<!-- //Main section -->
	</body>
</html>
