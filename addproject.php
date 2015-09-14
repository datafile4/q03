<!DOCTYPE html>
<html>
<head>
	<title>Add New Project Page</title>
	<script src="jquery/jquery-1.11.3.js"></script>
	<script src="js/bootstrap.js"></script>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
<!-- make table -->
	<table class="table table-bordered">


	<!--first -->
		<tr>
			<td>Client</td>
			<td>
		<!-- make dropdown section -->
				<div class="dropdown">
  					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   					Open Demo Inc
    				<span class="caret"></span>
 					</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    						<li><a href="#">Open Demo Inc</a></li>
    						<li><a href="#">Thomas Holidays & Rentals Inc</a></li>
						</ul>
				</div><!--/dropdown -->
		<!-- /make dropdown section -->
			</td>
		</tr>
	<!-- /first -->



	<!--second -->
		<tr>
			<td>Project Title</td>
			<td><input type="text" class="form-control textProjectInfo" placeholder=""></td>
		</tr>
	<!-- /second -->


	<!--third -->
		<tr>
			<td>Project Deadline</td>
			<td><input type="text" class="form-control textProjectInfo" placeholder=""></td>
		</tr>
	<!--third -->


	<!--fourth -->
		<tr>
			<td class="descriptionSize">Description</td>
			<td>
			<form>
				<textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>

			</form>

			</td>
		</tr>
	<!--fourth -->


	<!--fifth -->
		<tr>
			<td>Website URL</td>
			<td><input type="text" class="form-control textProjectInfo" placeholder=""></td>
		</tr>
	<!--fifth -->


	<!-- sixth -->
		<tr>
			<td>FTP User Name</td>
			<td><input type="text" class="form-control textProjectInfo" placeholder=""></td>
		</tr>
	<!-- sixth -->


	<!-- seventh -->
		<tr>
			<td>FTP Password</td>
			<td><input type="text" class="form-control textProjectInfo" placeholder=""></td>
		</tr>
	<!-- seventh -->
	</table>
<!-- /make table -->

		<button type="button" class="btn btn-primary addNewProjectButton">Add New Project</button>


</body>
</html>
