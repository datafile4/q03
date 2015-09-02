<!DOCTYPE html>
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
          <input type="text" placeholder="Task Title">
          <select class="combobox">
            <option value="Assigned To">Assigned To</option>
          </select>
          <select class="combobox">
            <option value="Project Home">Project Home</option>
          </select>
          <select class="combobox">
            <option value="Task Status">Task Status</option>
          </select>
          <button type="submit" class="btn btn-primary">Search My Tasks</button>
      </div>
      <div class="table-section row">
        <table class="table table-striped">
          <thead>
            <th><a href="#">Task ID<i class="fa fa-sort"></i></a></th>
            <th><a href="#">Project ID<i class="fa fa-sort"></i></a></th>
            <th>Title</th>
            <th>Assigned</th>
            <th><a href="#">Date Due<i class="fa fa-sort"></i></a></th>
            <th><a href="#">Status<i class="fa fa-sort"></i></a></th>
            <th><i class="fa fa-bars"></i></th>
          </thead>
          <!-- <?php
            $allClientsArray = array(0=>array('id'=>0,'project_title'=>'Open Skynet','client_name'=>'John Connor','deadline'=>'2060','progress'=>6,'time_spent'=>'02:45:45','status'=>'In progress'));
            include("functions.inc");
            createAllProjectsTable($allClientsArray);
          ?> -->
          <!-- <tbody>
            <tr>
              <td>
                1
              </td>
              <td>
                <a href="#">Open Demo Inc</a>
              </td>
              <td>
                Eminem new single
              </td>
              <td>
                Eminem and Dr.Dre
              </td>
              <td>
                12-05-95
              </td>
              <td>
                <button type="button"class="btn btn-danger btn-sm">Behind</button>
              </td>
              <td>
                <button type="button"class="btn btn-xs btn-info">
                  <i class="fa fa-pencil"></i>
                </button>
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
