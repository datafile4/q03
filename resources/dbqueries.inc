<?php
  //file for queries to database
  $selectAllProjects = "SELECT * FROM projects INNER JOIN clients ON projects.client_id=clients.client_id" ;
  $selectClients = "SELECT * FROM clients INNER JOIN COUNT(*) as client_id FROM projects WHERE clients.client_id = projects.client_id";
  $selectTasks = "SELECT * FROM tasks";
  $selectUserProjects = "SELECT * FROM user_projects";
 ?>
