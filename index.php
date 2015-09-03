<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Dashboard</title>
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
							<button type="button" class="btn btn-default"><a href="mytimers.php"><i class="fa fa-clock-o"></i></a></button>
							<button type="button" class="btn btn-default"><a href="managegroups.php"><i class="fa fa-sitemap"></i></a></button>
							<button type="button" class="btn btn-default"><a href="settings.php"><i class="fa fa-wrench"></i></a></button>
						</div>
					</div>
					<!-- //Sidebar menu -->

					<!-- Sidebar sections -->
					<div class="list-group myMargin">
						<a href="index.php" class="list-group-item active"><i class="fa fa-home"></i><span class="col-md-offset-1">Dashboard</span></a>
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
					<!-- Section_heading -->
					<div class="panel-heading">
						<span class="panel-title" class="sectionName"><i class="fa fa-home"></i> Dashboard</span>
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
					<!-- //Section_heading -->

					<div class="panel-body">
					<!-- Section Body -->

						<div class=" well well-sm">
							<div class="userName ">
							<!-- user info -->
								<img src="imgs/1.jpg" height="37" width="37" class="img-circle"alt=""> <strong>Username</strong><span class="label label-danger col-md-offset-10">Box width</span>
							</div>
							<!-- //user info -->
						</div>


						<!-- Detailed section -->

						<div class="detail col-md-6">
							<div class="panel panel-primary myTaskStatus">
								<div class="panel-heading">
										<h3 class="panel-title">My Tasks Status</h3>
								</div>
								<!-- Section_start -->
								<div class="panel-body">
								<!-- status statisic -->
									<div class=" well well-sm text-center">
										<span class="label label-info">1 Completed</span>
										<span class="label label-warning">1 Pending</span>
										<span class="label label-danger">20 Behind Schehulde</span>
									</div>
									<!-- //status statisic -->

										<div id="taskList2">
											<div class="list-group">
												<a href="#" class="list-group-item">Convert design concept in intial psd layout<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Fail Summer<span class="label label-info pull-right">Complete</span></a>
												<a href="#" class="list-group-item">Slicing psd into basic html<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Javascript development<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Final html & javascript development<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Search for design concepts<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Come up with color scheme<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Create mysql database<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Create mysql database<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Create mysql database<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Buy Google<span class="label label-warning pull-right">Pending</span></a>
												<a href="#" class="list-group-item">Create mysql database<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Create mysql database<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Create boxwidth<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Smoke<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Create mysql database<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Create mysql database<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Create mysql database<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Create mysql database<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Create mysql database<span class="label label-danger pull-right">Behind</span></a>
												<a href="#" class="list-group-item">Create mysql database<span class="label label-danger pull-right">Behind</span></a>
											</div>
										</div>
								</div>
								<!-- //Section_start -->
							</div>
						</div>
						<!-- //Detailed section -->

						<div class="detail col-md-6">
							<div class="panel panel-primary taskOne ">
								<div class="panel-heading">
									<h3 class="panel-title">Overview</h3>
								</div>

								<div class="panel-body">
										<!-- projects -->
										<div id="task2">
											<div class="chart">
												<div class="panel panel-danger">
													<div class="panel-heading">
														<h3 class="panel-title"><a href="#">Open Demo Inc.</a></h3>
														<h6 class="">Complete Website Deisgn - Using Wordpress</h6>
													</div>
													<div class="panel-body">
													<!-- project details start -->
														<div class="progress">
															<div class="progress-bar" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100" style="width: 8%;">
																8%
															</div>
														</div>

														<div class="table-section">
															<table class="table table-bordered text-center">
																<thead class="text-center">
																	<tr>
																		<th class="text-center">COMPLETE</th>
																		<th class="text-center">TASKS</th>
																		<th class="text-center">DAYS DUE</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>8%</td><td>16</td><td>10</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
											<div class="chart">
												<div class="panel panel-danger">
													<div class="panel-heading">
														<h3 class="panel-title"><a href="#" >Thomas Hollidays & Rentals Inc.</a></h3>
														<h6 class="">New Boxwidth Design</h6>
													</div>
													<div class="panel-body">

														<div class="progress">
															<div class="progress-bar" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width: 13%;">
																13%
															</div>
														</div>

														<div class="table-section">
															<table class="table table-bordered text-center">
																<thead>
																	<tr>
																		<th class="text-center">COMPLETE</th>
																		<th class="text-center">TASKS</th>
																		<th class="text-center">DAYS DUE</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>13%</td><td>4</td><td>5</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
											<div class="chart">
												<div class="panel panel-danger">
													<div class="panel-heading">
														<h3 class="panel-title"><a href="#" >Thomas Hollidays & Rentals Inc.</a></h3>
														<h6 class="">New Boxwidth Design</h6>
													</div>
													<div class="panel-body">

														<div class="progress">
															<div class="progress-bar" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width: 13%;">
																13%
															</div>
														</div>

														<div class="table-section " >
															<table class="table table-bordered text-center">
																<thead>
																	<tr>
																		<th class="text-center">COMPLETE</th>
																		<th class="text-center">TASKS</th>
																		<th class="text-center">DAYS DUE</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>13%</td><td>4</td><td>5</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- projects -->
									</div>
								</div>
							</div>
							<!-- //Detailed section -->
						</div>
					</div>
				</div>
			</div>
			<!-- //Main section -->
</body>
</html>
