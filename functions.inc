<?php
  //connection to server

  //function for generate table in myprojects page
  function createMyProjectsTable($array){
    echo "<tbody>";
    foreach ($array as $key => $value) {//key is user id
      $contents = $value;//contents - fields of db
      echo "<tr>";
      foreach ($contents as $key => $value) { //value  - content of field
        if($key=='progress'){
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
      }
      echo "</tr>";
    echo "</tbody>";
  }
}
//function for generate table in allprojects page
function createAllProjectsTable($array){
  $hostname = "localhost";
  $dbname = "freelance";
  $username = "root";
  $password = "kuroi";
  $connection = mysqli_connect($hostname, $username, $password);
  if(!$connection){
    echo "Shit<br>";
  }
  $connectdb = mysqli_select_db($connection,$dbname);

  $dbselect = "SELECT id, project_name, client_name, deadline, progress, my_time, status FROM all_projects";
  $sql = mysqli_query($connection, $dbselect);

  echo "<tbody>";

  while ($row = mysqli_fetch_array($sql)){
    echo "<tr>";
    echo  "<td>".$row['id']."</td>";
    echo  "<td>".$row['project_name']."</td>";
    echo "<td>".$row['client_name']."</td>";
    echo "<td>".$row['deadline']."</td>";
    echo "<td>
    <div class=\"progress\">
       <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"".$row['progress']."\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ".$row['progress']."%;\">"
           .$row['progress']."%
       </div>
     </div>
    </td>";
    echo "<td>".$row['my_time']."</td>";
    echo "<td>".$row['status']."</td>";
    echo "<td><button type=\"button\" class=\"btn btn-xs btn-danger\"><i class=\"fa fa-trash\"></i></button></td>";
    echo "</tr>";
  }
  // $row = mysqli_fetch_array($sqlm,MYSQL_NUM);
  // while ($row = mysqli_fetch_array($sql)){
  //   echo "<tr>";
  //
  // }
  // mysqli_free_result($sql);
  // mysqli_close($connection);

  // foreach ($array as $key => $value) {
  //   $contents = $value;
  //   echo "<tr>";
  //   foreach ($contents as $key => $value) {
  //             if($key=='progress'){
  //       echo "<td>
  //               <div class=\"progress\">
  //                 <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"$value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: $value%;\">
  //                 $value%
  //                 </div>
  //               </div>
  //             </td>";
  //       }else {
  //         if($key=='client'){
  //           echo "<td><span class=\"label label-primary\">$value</span></td>";
  //         }else{
  //           echo "<td>$value</td>";
  //         }
  //       }
  //   }
  //   echo "<td>";
  //     echo "<button type=\"button\" class=\"btn btn-xs btn-danger\">
  //       <i class=\"fa fa-trash\"></i></button>";
  //   echo "</td>";
  //   echo "</tr>";
  // }
  echo "</tbody>";
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
