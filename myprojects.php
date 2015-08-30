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
    <link rel="stylesheet" href="css/fontawesome.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    <div class="col-md-offset-4 col-md-8 ">
      <div class="row">
        <a href="#" type="submit" class="btn btn-information">All</a>
        <a href="#" type="submit" class="btn btn-information">Completed</a>
        <a href="#" type="submit" class="btn btn-information">In Progress</a>
        <a href="#" type="submit" class="btn btn-information">Behind Schedule</a>
      </div>
      <div class="row">
        <?php
          $myProjects = array(0=>array('#'=>0,'project'=>'Web-design','client'=>'Open client','deadline'=>'30-04-2015','progress' =>6,'my-time'=>'20-43-10','my_tasks'=>'9','status'=>'In progress'));
        ?>
        <table class="table table-striped col-md-12">
          <?php
            include("functions.inc");
            createTable($myProjects);
          ?>
          <!-- <thead>
            <th>#</th>
            <th>Project</th>
            <th>Client</th>
            <th>Deadline</th>
            <th>Progress</th>
            <th>MyTime</th>
            <th>MyTask</th>
            <th>Status</th>
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
            </tr>
          </tbody> -->
        </table>
      </div>
  </div>

  </body>
</html>
