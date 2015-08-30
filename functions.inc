<?php
  function createTable($array){
    echo "<thead>";
    $headValues = $array[0];
    foreach ($headValues as $key => $value) {
      echo "<th>$key</th>";
    }
    echo "</thead>";
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

// function createMyProjectsTable($array){
//   echo "<thead>";
//   $headValues = $array[0];
//   foreach ($headValues as $key => $value) {
//     echo "<th>$key</th>";
//   }
//
// }
?>
