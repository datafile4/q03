<?php
  function createMyProjectsTable($array){
    echo "<tbody>";
    foreach ($array as $key => $value) {
      $contents = $value;
      echo "<tr>";
      foreach ($contents as $key => $value) {
        echo "<td>$value</td>";
      }
      echo "</tr>";
    echo "</tbody>";
  }
}

function createAllProjectsTable($array){
  echo "<tbody>";
  foreach ($array as $key => $value) {
    $contents = $value;
    echo "<tr>";
    foreach ($contents as $key => $value) {
      echo "<td>$value</td>";
    }
    echo "<td>";
      echo "<button type=\"button\" class=\"btn btn-xs btn-danger\">
        <i class=\"fa fa-trash\"></i></button>";
    echo "</td>";
    echo "</tr>";
    echo "</tbody>";
  }
}

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
function createTMTable($array){
  echo "<tbody>";
  foreach ($array as $key => $value) {
    $contents = $value;
    echo "<tr>";
    foreach ($contents as $key => $value) {
      echo "<td>$value</td>";
    }


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

function createMyTasksTable($array){
  echo "<tbody>";
  foreach ($array as $key => $value) {
    $contents = $value;
    echo "<tr>";
    foreach ($contents as $key => $value) {
      echo "<td>$value</td>";
    }
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
