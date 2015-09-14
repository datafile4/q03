<?php
	include 'connection.php';

	function createAllProjectsTable(){

	global $dbconnect;

	$dbselect = "SELECT project_id, project_name, client_name, deadline, progress, my_time, status FROM projects";
	$sql = mysqli_query($dbconnect,$dbselect);

	while ($row = mysqli_fetch_array($sql)){
		echo "<tr>
			 <td style=\"vertical-align:middle\" >".$row['project_id']."</td>
			 <td style=\"vertical-align:middle\" ><a href=\"#\">".$row['project_name']."</a></td>
			 <td style=\"vertical-align:middle\" class=\"text-center\"><span class=\"label label-primary\">".$row['client_name']."</span></td>
			 <td style=\"vertical-align:middle\" class=\"text-center\">".$row['deadline']."</td>
			 <td style=\"vertical-align:middle\" class=\"text-center\">
			 	<div class=\"progress progress-table\">
					<div class=\"progress-bar\" style=\"width:".$row['progress']."%\">
						<span>".$row['progress']."%</span>
					</div>
				</div>
			 </td>
			 <td class=\"text-center\" style=\"vertical-align:middle\" >".$row['my_time']."</td>
		 	 <td class=\"text-center\" style=\"vertical-align:middle\" ><span class=\"label label-info\">".$row['status']."</span></td>
			 <td style=\"vertical-align:middle\"  class=\"text-center\">
				<a href=\"project_delete.php?id=".$row['project_id']."\" class=\"btn btn-xs btn-danger\">
					<i class=\"fa fa-trash fa-fw\"></i>
				</a>
			 </td >
			 </tr>";
	}
}

	//function for generate table in myprojects page
	function createMyProjectsTable($array){
		echo "<tbody>";

		foreach ($array as $key => $value) {//key is user id
			$contents = $value;//contents - fields of db

			echo "<tr>";

			foreach ($contents as $key => $value) { //value  - content of field
				if($key=='progress'){
					echo "<td>
							<div class=\"progress\">
								<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"$value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: $value%;\">
									$value%
								</div>
							</div>
							</td>";
					}else {
						if($key=='client'){
							echo "<td><span class=\"label label-primary\">$value</span></td>";
						}else{
							echo "<td>$value</td>";
						}
						}
			}
			echo "</tr>";
		}
		echo "</tbody>";
	}


	//function for generate table in allprojects page
	// function createAllProjectsTable($array){
	// 	echo "<tbody>";

	// 	foreach ($array as $key => $value) {
	// 	$contents = $value;
	// 	echo "<tr>";
	// 	foreach ($contents as $key => $value) {
	// 		if($key=='progress'){
	// 			echo    "<td>
	// 						<div class=\"progress\">
	// 							<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"$value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: $value%;\">
	// 								$value%
	// 							</div>
	// 						</div>
	// 					</td>";
	// 		}else {
	// 			if($key=='client'){
	// 				echo "<td><span class=\"label label-primary\">$value</span></td>";
	// 			}else{
	// 				echo "<td>$value</td>";
	// 			}
	// 		}
	// 	}
	// 	echo	"<td class=\"text-center\">
	// 				<button type=\"button\" class=\"btn btn-xs btn-danger\">
	// 					<i class=\"fa fa-trash fa-fw\"></i>
	// 				</button>
	// 			</td>
	// 			</tr>";

	// 	}
	// 	echo "</tbody>";
	// }

//function for generate table in clients page
function createClientsTable($array){
  echo "<tbody>";
  foreach ($array as $key => $value) {
	 $contents = $value;
	 echo "<tr>";
	 foreach ($contents as $key => $value) {
		echo "<td>$value</td>";
	 }
	 echo "<td class=\"text-center\">";
	 echo "<button type=\"button\" class=\"btn btn-xs btn-danger\">";
	 echo  "<i class=\"fa fa-trash fa-fw\"></i>";
	 echo   "</button>";
	 echo "</td>";
	 echo "</tr>";
  echo "</tbody>";
  }
}
//function for generate table in teammambers page
function createTMTable($array){
  echo "<tbody>";
  foreach ($array as $key => $value) {
	 $contents = $value;
	 echo "<tr>";
	 foreach ($contents as $key => $value) {
		echo "<td style=\"vertical-align:middle\" >$value</td>";
	 }
	 //create last column with buttons
		echo	"<td style=\"vertical-align:middle\" class=\"text-center\">
						<button type=\"button\" class=\"btn btn-xs btn-info\">
							<i class=\"fa fa-pencil fa-fw\"></i>
						</button>&nbsp;

						<button type=\"button\" class=\"btn btn-xs btn-danger\">
							<i class=\"fa fa-trash fa-fw\"></i>
						</button>
					</td>
				</tr>
			</tbody>";
  }
}
//generate table in managegroups page
function manageGroupsTable($array){
  echo "<tbody>";
  foreach ($array as $key => $value) {
	 $contents = $value;
	 echo "<tr>";
	 foreach ($contents as $key => $value) {
		if (gettype($value)=='array'){
		  $labels = $value;
		  echo "<td class=\"text-center\">";
		  foreach ($labels as $key => $value) {
			 echo "<span class=\"label label-success\"><i class=\"fa fa-lock fa-fw\"></i>$value</span>&nbsp;";
		  }
		  echo "</td>";
		} else
		echo "<td>$value</td>";
	 }
	 echo "</tr>";
  echo "</tbody>";
  }
}
//generate table in mytimers page
function createMyTimersTable($array){
	echo "<tbody>";

	foreach ($array as $key => $value) {
		$contents = $value;

		echo "<tr>";

		foreach ($contents as $key => $value) {
			echo "<td style=\"vertical-align:middle\">$value</td>";
		}
		echo	"<td style=\"vertical-align:middle\">
					<button type=\"button\" class=\"btn btn-md btn-success btn-xs\">
					Start My Timer
					</button>
				</td>

				<td style=\"vertical-align:middle\" class=\"text-center\">
					<button type=\"button\" class=\"btn btn-xs btn-info\">
						<i class=\"fa fa fa-refresh fa-fw\"></i>
					</button>
					<button type=\"button\" class=\"btn btn-xs btn-danger\">
						<i class=\"fa fa-pencil-square-o fa-fw\"></i>
					</button>
				</td>
				</tr>
				</tbody>";
	}
}
//function for generate table in mytasks page
function createMyTasksTable($array){
	echo "<tbody>";

	foreach ($array as $key => $value) {
		$contents = $value;

		echo "<tr>";

		foreach ($contents as $key => $value) {
		echo "<td>$value</td>";
		}
		//generate last column, that contains two buttons
		echo	"<td class=\"text-center\">
				<button type=\"button\" class=\"btn btn-xs btn-info\">
				<i class=\"fa fa fa-pencil fa-fw\"></i>
				</button>
				<button type=\"button\" class=\"btn btn-xs btn-danger\">
				<i class=\"fa fa-pencil-square-o fa-fw\"></i>
				</button>
				</td>
				</tr>
				</tbody>";
	}
}

?>
