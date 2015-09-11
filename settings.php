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
						<!-- Detailed section -->
						<div class="well well-sm">
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
										<h3>General Settings</h3>

										<hr>

										<table class="table table-hover">
											<tr>
												<td>Item</td>
												<td>Value</td>
											</tr>

											<tr>
												<td>Dashboard Title</td>
												<td><input type="text" class="form-control" placeholder="Text input"></td>
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
										<h3>Company Details</h3>

										<hr>
											
										<table class="table table-hover">
											<tr>
												<td>Item</td>
												<td>Value</td>
											</tr>

											<tr>
												<td>System Email*</td>
												<td><input type="text" class="form-control" placeholder="you@somecompnay.ccc"></td>
											</tr>

											<tr>
												<td>City</td>
												<td><input type="text" class="form-control" placeholder="Some city"></td>
											</tr>
											<tr>
												<td>Telephone</td>
												<td><input type="text" class="form-control" placeholder="000000000"></td>
											</tr>

											<tr>
												<td>Company Name*</td>
												<td><input type="text" class="form-control" placeholder="Some Company Inc"></td>
											</tr>

											<tr>
												<td>Email Signature*</td>
												<td><input type="text" class="form-control" placeholder="Text"></td>
											</tr>
										</table>
									</div>

									<div id="menu2" class="tab-pane fade">
										<h3>Updates</h3>

										<hr>

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
										<h3>Email templates(client)</h3>

										<button type="button" class="positionRel buttonClientTemp btn btn-primary">Client Templates</button>

										<button type="button" class="positionRel buttonAdminTemp btn btn-success">Admin Templates</button>

										<hr>

									</div>
								</div>
							</div>
							<!-- created tab -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Main section -->
	</body>
</html>
