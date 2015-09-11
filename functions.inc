<?php
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
	function createAllProjectsTable($array){
		echo "<tbody>";

		foreach ($array as $key => $value) {
		$contents = $value;
		echo "<tr>";
		foreach ($contents as $key => $value) {
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
		echo	"<td class=\"text-center\">
					<button type=\"button\" class=\"btn btn-xs btn-danger\">
						<i class=\"fa fa-trash fa-fw\"></i>
					</button>
				</td>
				</tr>";

		}
		echo "</tbody>";
	}

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
