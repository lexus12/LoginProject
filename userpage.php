<html>
	<header>
		<title>My First Login Page</title>
		<link rel="stylesheet" href="../css/style.css">
	</header>
	<body>
	
  
		zalogowano
		<a href="classes/logout.class.php">wyloguj</a>

<?php

//check if user is logged and show info
if(isset($_SESSION['is_logged'] ) && $_SESSION['is_logged'] == true) {
				
	include_once('classes/userdata.class.php');
				
} else {
  header('Location: index.php');
  
}

?>
		
	</body>
</html>	
