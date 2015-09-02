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
          <input type="text" placeholder="Client ID">
          <select class="combobox">
            <option value="Company Name">Company Name</option>
          </select>
          <select class="combobox">
            <option value="Email">Email</option>
          </select>
          <button type="submit" class="btn btn-primary">Search Clients</button>
          <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>Add new Clients</button>
      </div>
      <div class="table-section row">
        <table class="table table-striped">
          <thead>
            <th><a href="#">ID<i class="fa fa-sort"></i></a></th>
            <th><a href="#">Company Name<i class="fa fa-sort"></i></a></th>
            <th><a href="#">Main Contact<i class="fa fa-sort"></i></a></th>
            <th>Telephone</th>
            <th><a href="#">Projects<i class="fa fa-sort"></i></a></th>
            <th><i class="fa fa-bars"></i></th>
          </thead>

          <?php
            include("functions.inc");
            $clientsArray = array(0=>(array('id'=>0,'company_name'=>'open demo','main_contact'=>'Flex','telephone'=>'4243','projects'=>1)));
            createClientsTable($clientsArray);
          ?>
        </table>
      </div>
  </div>

  </body>
</html>
