	<?php
		//	checking user login
			include("session.php");
			echo $user_session_status;
			if($user_session_status){
				include 'templates/myAccount.php';
				include 'templates/navbar.php';
				include 'templates/dashboard.html';
			} else {
				echo "access denied";
			}

		?>
