<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css" style="text/css">
    <link rel="stylesheet" href="css/font-awesome.css">
  </head>
  <body>
    <table class="table table-striped">
      <?php
        $myProjects = array(0=>array('name'=>'emil','surname'=>'Alasgarov'),1=>array('name'=>'vasya','surname'=>'pupkin'));
        include('functions.inc');
        createTable($myProjects);
       ?>
    </table>
  </body>
</html>
