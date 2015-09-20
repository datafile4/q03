	<?php
		//	checking user login
			include("checkLogin.php");
			if(checkLogin()){
				include 'templates/dashboard.html';
				include 'templates/static.php';
			} else {
				echo("access denied");
				header("Location: index.php");
			}
		?>
