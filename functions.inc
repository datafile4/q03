<?php
  //function for generate table in myprojects page
  function createMyProjectsTable($array){
    echo "<tbody>";
    foreach ($array as $key => $value) {//key is user id
      $contents = $value;//contents - fields of db
      echo "<tr>";
<<<<<<< HEAD
      foreach ($contents as $key => $value) { //value  - content of field
        echo "<td>$value</td>";
=======
      foreach ($contents as $key => $value) {
        if($key=='progress')
        {
        echo "<td>
                <div class=\"progress\">
                  <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"$value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: $value%;\">
                  $value%
                  </div>
                </div>
              </td>";
        }else {
          if($key=='client'){
            echo "<td><span class=\"label label-primary\">$value</span></td>";
          }else{
            echo "<td>$value</td>";
          }
        }
>>>>>>> d02ac216265ef9bdc5babc5301139dc40668d684
      }
      echo "</tr>";
    echo "</tbody>";
  }
}
//function for generate table in allprojects page
function createAllProjectsTable($array){
  echo "<tbody>";
  foreach ($array as $key => $value) {
    $contents = $value;
    echo "<tr>";
    foreach ($contents as $key => $value) {
       if($key=='progress')
        {
        echo "<td>
                <div class=\"progress\">
                  <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"$value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: $value%;\">
                  $value%
                  </div>
                </div>
              </td>";
        }else {
        echo "<td>$value</td>";
        }
    }
    echo "<td>";
      echo "<button type=\"button\" class=\"btn btn-xs btn-danger\">
        <i class=\"fa fa-trash\"></i></button>";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
  }
}
//function for generate table in clients page
function createClientsTable($array){
  echo "<tbody>";
  foreach ($array as $key => $value) {
    $contents = $value;
    echo "<tr>";
    foreach ($contents as $key => $value) {
      echo "<td>$value</td>";
    }
    echo "<td>";
    echo "<button type=\"button\" class=\"btn btn-xs btn-danger\">";
    echo  "<i class=\"fa fa-trash\"></i>";
    echo   "</button>";
    echo "</td>";
    echo "</tr>";
  echo "</tbody>";
  }
}
//function for generate table in teammambers page
function createTMTable($array){
  echo "<tbody>";
  foreach ($array as $key => $value) {
    $contents = $value;
    echo "<tr>";
    foreach ($contents as $key => $value) {
      echo "<td>$value</td>";
    }
    //create last column with buttons
  echo "<td>";
    echo "<button type=\"button\" class=\"btn btn-xs btn-danger\">";
      echo  "<i class=\"fa fa-pencil\"></i>";
    echo   "</button>";
    echo "<button type=\"button\" class=\"btn btn-xs btn-danger\">";
      echo "<i class=\"fa fa-trash\"></i>";
    echo "</button>";
  echo "</td>";
  echo "</tr>";
  echo "</tbody>";
  }
}
//generate table in managegroups page
function manageGroupsTable($array){
  echo "<tbody>";
  foreach ($array as $key => $value) {
    $contents = $value;
    echo "<tr>";
    foreach ($contents as $key => $value) {
      if (gettype($value)=='array'){
        $labels = $value;
        echo "<td>";
        foreach ($labels as $key => $value) {
          echo "<span class=\"label label-success\">$value</span>";
        }
        echo "</td>";
      } else
      echo "<td>$value</td>";
    }
    echo "</tr>";
  echo "</tbody>";
  }
}
//generate table in mytimers page
function createMyTimersTable($array){
  echo "<tbody>";
  foreach ($array as $key => $value) {
    $contents = $value;
    echo "<tr>";
    foreach ($contents as $key => $value) {
      echo "<td>$value</td>";
    }
    echo "<td>";
      echo "<button type=\"button\" class=\"btn btn-md btn-success\">";
      echo  "Start My Timer";
      echo   "</button>";
    echo "</td>";
    //generate last column, that contains two buttons
    echo "<td>";
      echo "<button type=\"button\" class=\"btn btn-xs btn-danger\">";
      echo "<i class=\"fa fa fa-refresh\"></i>";
      echo "</button>";
      echo "<button type=\"button\" class=\"btn btn-xs btn-danger\">";
      echo "<i class=\"fa fa-pencil-square-o\"></i>";
      echo "</button>";
    echo "</td>";
    echo "</tr>";
  echo "</tbody>";
  }
}
//function for generate table in mytasks page
function createMyTasksTable($array){
  echo "<tbody>";
  foreach ($array as $key => $value) {
    $contents = $value;
    echo "<tr>";
    foreach ($contents as $key => $value) {
      echo "<td>$value</td>";
    }
    //generate last column, that contains two buttons
    echo "<td>";
    echo "<button type=\"button\" class=\"btn btn-xs btn-danger\">";
      echo "<i class=\"fa fa fa-refresh\"></i>";
    echo "</button>";
    echo "<button type=\"button\" class=\"btn btn-xs btn-danger\">";
      echo "<i class=\"fa fa-pencil-square-o\"></i>";
    echo "</button>";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
  }
}
?>
