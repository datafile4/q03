<!doctype html>
	<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Groups</title>
		<script src="jquery/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/superhero.bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style_flex.css">
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

				<div class="panel-primary"><!-- panel_start -->
					<div class="panel-body">
						<div class=" well well-sm">
							<div class="userName">
								<h5>Manage Groups</h5>
							</div>
						</div>

						<div class="well well-xs">
							<div id="table-responsive">
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th><a href="#">ID<i class="fa fa-sort fa-fw"></i></a></th>
											<th><a href="#">Group Name<i class="fa fa-sort fa-fw"></i></a></th>
											<th>Team Members</th>
											<th class="text-center"><i class="fa fa-bars fa-fw"></i></th>
										</tr>
									</thead>
										<?php
											include_once("functions.inc");
											$manage_groups_array = array(0=>array('id'=>0,'group_name'=>'Loosers','team_members'=>1,'groups'=>array('Permission','Migrate','Kefir')));
											manageGroupsTable($manage_groups_array);
										?>
								</table>
							</div>

							<div class="col-md-offset-10" id="addButton-section">
								<button type="button" class="btn btn-success" ><i class="fa fa-plus fa-fw"></i>Add New Group</button>
							</div>
						</div>



						<div class="" id="alerts-section" >
							<div class="alert alert-info" style="margin-bottom:10px;"><i class="fa fa-info-circle fa-fw"></i>
								[Administrators] have Global permissions which do not need to be changed/modified here
							</div>
							<div class="alert alert-info" style="margin-bottom:10px;"><i class="fa fa-info-circle fa-fw"></i>
								[IMPORTANT] For security and practical reasons, some categories have 'minimum' and 'maximum' seculrity LEVELS. Example: [CLIENTS] permissions cannot be set above [1]....[My PROJECT DETAILS] cannot be set below [1]
							</div>
						</div>

					</div>
				</div><!-- panel_end -->
			</div>
		</div>
		<!-- //Main section -->
	</body>\
</html>
