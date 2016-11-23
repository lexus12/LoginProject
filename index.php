		<?php
		session_start();

		//check if user is logged and choose template
		if(isset($_SESSION['is_logged']) && $_SESSION['is_logged'] == false) {
						
			include_once('templates/header.is.logged.php');
						
		} else {
					
			header('Location: userpage.php');
						
		}

		?>
		
	</body>
</html>	
