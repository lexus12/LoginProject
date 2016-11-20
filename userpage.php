
<?php
session_start();

class UserObject
{
		private $userName;
		private $userEmail;
		
		public function __construct($userName, $userEmail)
		{
			
			$this->userName = $userName;
			$this->userEmail = $userEmail;
			
		}
		
		public function showUser()
		{
			
			
			echo strtoupper($this->userName);
			
		}
			
}//end of UserObject

if(!isset($_SESSION['is_logged']) || $_SESSION['is_logged'] == false) {
		//no logged user - redirect
			$_SESSION['data_err'] = true;
			header('Location: index.php');
}

include_once('classes/connect.class.php');
include_once('classes/select.class.php');


$userName = $_SESSION['nick'] ;	
$userEmail = $_SESSION['email'];
$userPrivil = $_SESSION['user_privilege'];
$userData = new UserObject($userName, $userEmail);

?>

<html>
	<header>
		<title>My First Login Page</title>
		<link rel="stylesheet" href="css/style.css">
	</header>
	<body>
	
		<h2><?php $userData->showUser(); ?> zalogowałeś się na konto!<br/></h2>
		<p>Twój email to: <b><?php echo $userEmail; ?></b> </p>
		<p>Twój status to:
			<b><?php	if($userPrivil == 1) {echo 'Administrator';}	else {echo "Użytkownik";}?></b>
		</p>
		<a href="classes/logout.class.php">wyloguj</a>

		
	</body>
</html>	
