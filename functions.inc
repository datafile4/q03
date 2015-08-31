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
?>
