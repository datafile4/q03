<?php
include 'connection.php';


$client_name = $_POST['client_name'];
$project_name = $_POST['project_name'];
$project_deadline= $_POST['project_deadline'];
$description = $_POST['description'];
$web_url = $_POST['web_url'];
$ftp_name = $_POST['ftp_name'];
$ftp_password = $_POST['ftp_password'];

/*echo "$client_name<br>
	$project_name<br>
	$project_deadline<br>
	$description<br>
	$web_url<br>
	$ftp_name<br>
	$ftp_password<br>";*/

$insertQuery = "INSERT INTO projects (project_name, client_name, deadline, description, status, progress)
				VALUES ('$project_name', '$client_name', '$project_deadline', '$description', 'New', 0)";
$insert = mysqli_query($dbconnect, $insertQuery);

if($insert) {
	header("Location:allprojects.php");
}
else {
	echo "get tullan<br>".
	mysqli_error($dbconnect);
}


?>
