<?php

session_start();

class ChangeNick
{
		private $userName;
			
		public function __construct($userName)
		{
			
			$this->userName = $userName;
				
		}
		
		public function makeChange()
		{
			
			include_once('changename.class.php');
			$change = new Change($this->userName);
			$change->changeUserName();
			
		}
			
}//end of UserObject

if(!isset($_SESSION['is_logged']) || $_SESSION['is_logged'] == false) {
		//no logged user - redirect
			$_SESSION['data_err'] = true;
			header('Location: index.php');
}


if(isset($_POST['changeNick'])) {
	
	$userName = $_POST['nick'];
	$changeNick = new ChangeNick($userName);
	$changeNick->makeChange();
	
}
