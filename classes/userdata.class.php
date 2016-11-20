
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
			
			
			echo $this->userName.' '.$this->userEmail;
			
		}
			
}//end of UserObject
	
if(!isset($_SESSION['is_logged']) || $_SESSION['is_logged'] == false) {
		//no logged user - redirect
			$_SESSION['data_err'] = true;
			header('Location: ../index.php');
}

include_once('connect.class.php');
include_once('select.class.php');

$userName = $_SESSION['nick'] ;	
$userData = new UserObject($userName,'xxx');
$userData->showUser();
