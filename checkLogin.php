<?php
  session_start();
  function checkLogin(){//function for check login
    if(isset($_SESSION['username'])){
      return true;
    } else {
      return false;
    }
  }
 ?>
