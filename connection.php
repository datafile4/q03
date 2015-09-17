<?php

  include("resources/config.php");
  global $config;
  $dbname = $config["db"]["credentials"]["dbname"];
  $username = $config["db"]["credentials"]["username"];
  $pass = $config["db"]["credentials"]["password"];
  $host = $config["db"]["credentials"]["host"];

  //connection to db

  $dbconnect = mysqli_connect($host, $username, $pass,$dbname);
  if ($dbconnect){
    header("Location: index.php");
  }else {
    echo "ERROR!!!";
  }

?>
