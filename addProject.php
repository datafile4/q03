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

						<div class="well well-sm">
							<h5>Adding Project</h5>
						</div>

						<div class="well well-sm">
							<form action="proje_add.php" method="POST">
								<table class="table table-bordered">
									<tr>
										<td>Client</td>
										<td>
											<input type="text" name="client_name" class="form-control" placeholder="">
										</td>
									</tr>
									<tr>
										<td>Project Title</td>
										<td><input type="text" name="project_name" class="form-control" placeholder=""></td>
									</tr>
									<tr>
										<td>Project Deadline</td>
										<td><input type="date" value="2015-09-10" min="2015-09-10" name="project_deadline" class="form-control" placeholder=""></td>
									</tr>
									<tr>
										<td>Description</td>
										<td>
											<textarea name="description" rows="10" cols="90"></textarea>
										</td>
									</tr>
									<tr>
										<td>Website URL</td>
										<td><input type="text" name="web_url" class="form-control" placeholder=""></td>
									</tr>
									<tr>
										<td>FTP User Name</td>
										<td><input type="text" name="ftp_name" class="form-control" placeholder=""></td>
									</tr>
									<tr>
										<td>FTP Password</td>
										<td><input type="text" name="ftp_password" class="form-control" placeholder=""></td>
									</tr>
								</table>

								<input type="submit" class="btn btn-success" value="Add New Project">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Main section -->
	</body>
</html>
