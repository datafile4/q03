<?php
  //page for connect to database
  //data from admin.html
  $host = $_POST['server'];
  $username = $POST['pass'];
  $pass = $POST['pass'];
  $dbname = $POST['dbname'];
  //connection to db
  $dbconnect = mysqli_connect($host, $username, $pass,$dbname);

?>
