<?php
session_start();

//check if user is logged and choose template
if(isset($_SESSION['is_logged'] ) && $_SESSION['is_logged'] == true) {
				
	include_once('templates/header.is.logged.php');
				
} else {
				
	include_once('templates/header.isnt.logged.php');
				
}

?>




		
	</body>
</html>	
