<?php
include 'connection.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$delete_id=$_GET['id'];

$removeQuery = "DELETE FROM projects WHERE project_id=$delete_id";

//echo $removeQuery;

function sil(){
	global $dbconnect;
	global $removeQuery;

	$delete = mysqli_query($dbconnect,$removeQuery);

	if ($delete) {
		header("Location:allprojects.php");
	} else {
		echo "Silinmedi<br>".mysqli_error($dbconnect);
	}
	//echo "<a href='view.php'>Return to table</a>";
}

sil();

?>
