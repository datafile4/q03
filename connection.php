<?php

  include("resources/config.php");
  require("classes/Login.php");
  global $config;
  $dbname = $config["db"]["credentials"]["dbname"];
  $username = $config["db"]["credentials"]["username"];
  $pass = $config["db"]["credentials"]["password"];
  $host = $config["db"]["credentials"]["host"];
  $login = new Login($host, $username, $pass, $dbname);
  $connect = $login->connectDB();
  
  //connection to db

  // $dbconnect = mysqli_connect($host, $username, $pass,$dbname);


?>
