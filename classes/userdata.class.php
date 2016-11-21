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

include_once('connect.class.php');

$userName = $_SESSION['nick'] ;	
$userEmail = $_SESSION['email'];
$userPrivil = $_SESSION['user_privilege'];
$userData = new UserObject($userName, $userEmail);
