<!DOCTYPE html>
<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css" style="text/css">
    <!-- <link rel="stylesheet" href="css/style.css" style="text/css"> -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <div class="col-md-8 col-md-offset-4">
      <div class="titlebar row">
          <select class="combobox">
            <option value="Timer Status">Timer Status</option>
          </select>
          <select class="combobox">
            <option value="Project Name">Project Name</option>
          </select>
          <button type="submit" class="btn btn-primary">Search Timers</button>
      </div>
      <div class="table-section row">
        <table class="table table-striped">
          <thead>
            <th><a href="#">Project<i class="fa fa-sort"></i></a></th>
            <th><a href="#">Name<i class="fa fa-sort"></i></a></th>
            <th><a href="#">Time<i class="fa fa-sort"></i></a></th>
            <th><a href="#">Start/Stop<i class="fa fa-sort"></i></a></th>
            <th><i class="fa fa-bars"></i></th>
          </thead>

          <?php
            include("functions.inc");
            $my_project_timers_array = array(0=>(array('project_name'=>0,'name'=>'Fred Marks','Time'=>'0 : 10 : 52')));
            createMyTimersTable($my_project_timers_array);
          ?>
        </table>
      </div>
  </div>

  </body>
</html>
