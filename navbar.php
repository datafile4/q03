<?php

echo '		<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Freelance Dashboard</a>

						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="fa fa-list-ul fa-fw fa-lg"></span>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
							<li><a href="allprojects.php"><i class="fa fa-folder-open fa-fw"></i>All Projects <span class="badge progress-bar-info">4</span></a></li>
							<li><a href="clients.php"><i class="fa fa-user fa-fw"></i>Clients <span class="badge progress-bar-info">4</span></a></li>
							<li><a href="teammembers.php"><i class="fa fa-users fa-fw"></i>Team Members</a></li>
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>

								<ul class="dropdown-menu">
									<li><a href="myprojects.php"><i class="fa fa-folder-open-o fa-fw"></i>&nbsp;My Projects</a></li>
									<li><a href="mytimers.php"><i class="fa fa-clock-o fa-fw"></i>&nbsp;My Timers</a></li>
									<li><a href="mytasks.php"><i class="fa fa-list-ul fa-fw"></i>&nbsp;My Tasks</a></li>
									<li><a data-toggle="modal" data-target="#myModal"><i class="fa fa-cogs fa-fw"></i>&nbsp;My Account</a></li>

									<li role="separator" class="divider"></li>

									<li><a href="allprojecttasks.php"><i class="fa fa-tasks fa-fw"></i>&nbsp;All Project Tasks</a></li>
									<li><a href="managegroups.php"><i class="fa fa-sitemap fa-fw"></i>&nbsp;Manage Groups</a></li>

									<li role="separator" class="divider"></li>

									<li><a href="settings.php"><i class="fa fa-wrench fa-fw"></i>&nbsp;Settings</a></li>
									<li><a href="#"><i class="fa fa-power-off fa-fw"></i>&nbsp;Log Out</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>';

?>
