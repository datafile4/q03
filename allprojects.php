<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css" style="text/css">
    <!-- <link rel="stylesheet" href="css/style.css" style="text/css"> -->
        <!-- <link rel="stylesheet" href="css/style.css" style="text/css"> -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>


    <div class="allProjects-section  col-md-8 col-md-offset-4">
      <div class="titlebar row">
          <input type="text" placeholder="Project ID">
          <select class="combobox">
            <option value="Project Title">Project Title</option>
          </select>
          <select class="combobox">
            <option value="Client Company Name">Client Company Name</option>
          </select>
          <select class="combobox">
            <option value="Status">Status</option>
          </select>
          <button type="submit" class="btn btn-primary">Search Projects</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>Add new project</button>
      </div>
      <div class="table-section row">
        <table class="table table-striped">
          <thead>
            <th>#</th>
            <th><a href="#">Full Name <i class="fa fa-sort"></i></a></th>
            <th><a href="#">Client <i class="fa fa-sort"></i></a></th>
            <th>Deadline</th>
            <th><a href="#"> Progress <i class="fa fa-sort"></i></a></th>
            <th>MyTime</th>
            <th>Status</th>
    	   	  <th><i class="fa fa-bars"></i></th>
          </thead>
          <?php
            $allProjectsArray = array(0=>array('#'=>1,'project_title'=>'Web Design','client_name'=>'Open Demo','deadline'=>'2015',
            'progress'=>8,'time_spent'=>'02:45','status'=>'In Progress'));
            include_once("functions.inc");
            createAllProjectsTable($allProjectsArray);
          ?>
          <!-- <thead>
            <th>#</th>
            <th><a href="#">Full Name <i class="fa fa-sort"></i></a></th>
            <th><a href="#">Client <i class="fa fa-sort"></i></a></th>
            <th>Deadline</th>
            <th><a href="#"> Progress <i class="fa fa-sort"></a></th>
            <th>MyTime</th>
            <th>MyTask</th>
            <th>Status</th>
    	   	  <th><i class="fa fa-bars"></i></th>
          </thead>
          <tbody>
            <tr>
              <td>
                1
              </td>
              <td>
                Complete Web Desingn
              </td>
              <td>
                Open Demo
              </td>
              <td>
                16-09-2015
              </td>
              <td>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        60%
                      </div>
                  </div>
              </td>
              <td>
                02:25:45
              </td>
              <td>
                9
              </td>
              <td>
                In Progress
              </td>
              <td>
                <button type="button" class="btn btn-xs btn-danger">
                	<i class="fa fa-trash"></i>
                </button>
              </td>
            </tr>
          </tbody> -->
        </table>
      </div>
  </div>


  </body>
</html>