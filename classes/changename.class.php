<?php

class Change
{
	
	private $nick;
	
	public function __construct($nick)
	{
		
		$this->nick = $nick;

	}
	
	public function changeUserName()
	{
			include_once('connect.class.php');
			
			$user = $conn->prepare("SELECT * FROM user WHERE nick = :nick");
			$user->bindValue(':nick' , $this->nick, PDO::PARAM_STR);
			$user->execute();
			
			if ($user->rowCount()) {
				
				$_SESSION['userN_exists_err'] = true;
				header('Location: ../profile.php');
				
				
			} else {
			
				$sql = ("UPDATE user SET nick = :nick");
				$update = $conn->prepare($sql);
				$update->bindValue(':nick' , $this->nick, PDO::PARAM_STR);
				$update->execute();
				
				$_SESSION['nickChange'] = true;
				$_SESSION['nick'] = $this->nick;
				header('Location: ../profile.php');
				
			}
	}//end of changeUserName
	
}//end of Change class


if(isset($_POST['zarejestruj'])) {
	
	$nick = $_POST['nick'];
	

	
	$login = new Register($nick);
	$login->checkData();
	
	$login->addUser();

}
