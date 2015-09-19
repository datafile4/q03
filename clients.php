
	<?php
		ini_set('display_errors', 1);
		error_reporting(E_ALL);
		include_once("templates/clients_top.html");
		include("functions.inc");
		$clientsArray = array(0=>(array('id'=>1,'company_name'=>'La la la Inc.','main_contact'=>'Flex','telephone'=>'050 123 45 67','projects'=>1)));
		createClientsTable($clientsArray);
		include_once("templates/clients_bottom.html");
		include 'templates/add_client.html';
		include 'templates/myAccount.php';
		include 'templates/navbar.php';
	?>
