<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Dashboard</title>
		<script src="jquery/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/superhero.bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style_flex.css">
<!-- 		<meta name="viewport" content="width=320"> -->
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
					<!-- Section Body -->
					<div class="panel-body">

						<!-- user info -->
						<div class="well well-sm">
							<div class="row">
								<div class="col-md-12">
									<div class="pull-left"><img src="imgs/1.jpg" height="37" width="37" class="img-circle" alt="">&nbsp;</div>
									<div class="pull-left"><h4>Username</h4></div>
									<div class="pull-right"><span class="label label-danger">Box width</span></div>
								</div>
							</div>
						</div>
						<!-- //user info -->

						<div class="row">
						<!-- Detailed section -->
						<div class="detail col-md-6">
							<div class="panel-primary myTaskStatus">
								<div class="panel-heading">
									<h3 class="panel-title">My Tasks Status</h3>
								</div>

								<!-- task_list -->
								<div class="panel-body">
									<!-- status statisic -->
									<div class=" well well-sm text-center">
										<span class="label label-info">1 Completed</span>
											<span class="label label-warning">1 Pending</span>
										<span class="label label-danger">20 Behind Schehulde</span>
									</div>

									<!-- //status statisic -->
									<div id="taskList2">
										<table class="table table-striped table-hover">
											<tbody>
												<tr>
													<td><a href="#">Convert design concept in intial psd layout</a></td>
													<td><span class="label label-danger">Behind</span></td>
												</tr>
												<tr>
													<td><a href="#">Convert design concept in intial psd layout</a></td>
													<td><span class="label label-danger">Behind</span></td>
												</tr>
												<tr>
													<td><a href="#">Convert design concept in intial psd layout</a></td>
													<td><span class="label label-danger">Behind</span></td>
												</tr>
												<tr>
													<td><a href="#">Convert design concept in intial psd layout</a></td>
													<td><span class="label label-danger">Behind</span></td>
												</tr>
												<tr>
													<td><a href="#">Convert design concept in intial psd layout</a></td>
													<td><span class="label label-danger">Behind</span></td>
												</tr>

												<tr>
													<td><a href="#">Convert design concept in intial psd layout</a></td>
													<td><span class="label label-danger">Behind</span></td>
												</tr>

												<tr>
													<td><a href="#">Convert design concept in intial psd layout</a></td>
													<td><span class="label label-danger">Behind</span></td>
												</tr>

												<tr>
													<td><a href="#">Convert design concept in intial psd layout</a></td>
													<td><span class="label label-danger">Behind</span></td>
												</tr>

												<tr>
													<td><a href="#">Convert design concept in intial psd layout</a></td>
													<td><span class="label label-danger">Behind</span></td>
												</tr>

												<tr>
													<td><a href="#">Convert design concept in intial psd layout</a></td>
													<td><span class="label label-danger">Behind</span></td>
												</tr>

												<tr>
													<td><a href="#">Convert design concept in intial psd layout</a></td>
													<td><span class="label label-danger">Behind</span></td>
												</tr>

												<tr>
													<td><a href="#">Convert design concept in intial psd layout</a></td>
													<td><span class="label label-danger">Behind</span></td>
												</tr>

												<tr>
													<td><a href="#">Convert design concept in intial psd layout</a></td>
													<td><span class="label label-danger">Behind</span></td>
												</tr>

												<tr>
													<td><a href="#">Convert design concept in intial psd layout</a></td>
													<td><span class="label label-danger">Behind</span></td>
												</tr>

												<tr>
													<td><a href="#">Convert design concept in intial psd layout</a></td>
													<td><span class="label label-danger">Behind</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!-- task_list -->
							</div>
						</div>
						<!-- //Detailed section -->

						<!-- overview -->
						<div class="detail col-md-6">
							<div class="panel-primary myTaskStatus">
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
														<table class="table text-center">
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
														<table class="table text-center">
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
														<table class="table text-center">
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
						</div>
						<!-- //overview -->
					</div>
				</div>
			</div>
		</div>
		<!-- //Main section -->
	</body>
</html>
