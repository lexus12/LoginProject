<?php
session_start();

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
			
			$user = $conn->prepare("SELECT id FROM user WHERE nick = :nick");
			$user->bindValue(':nick' , $this->nick, PDO::PARAM_STR);
			$user->execute();
			$row = $user->fetch(PDO::FETCH_ASSOC);
			$id = $row['id'];
			//if user exists then redirect and tell user about it
			if ($user->rowCount()) {
				
				$_SESSION['userN_exists_err'] = true;
				header('Location: ../profile.php');
				
				
			} else {
				//make change in proper row selected by user id
				$sql = ("UPDATE user SET nick = :nick WHERE id = :id");
				$update = $conn->prepare($sql);
				$update->bindValue(':nick' , $this->nick, PDO::PARAM_STR);
				$update->bindValue(':id' , $this->id, PDO::PARAM_INT);
				$update->execute();
				
				$_SESSION['nickChange'] = true;
				$_SESSION['nick'] = $this->nick;
				header('Location: ../profile.php');
				
			}
	}//end of changeUserName
	
}//end of Change class

if(!isset($_SESSION['is_logged']) || $_SESSION['is_logged'] == false) {
		//no logged user - redirect
			$_SESSION['data_err'] = true;
			header('Location: index.php');
}

if(isset($_SESSION['nick2change'])) {

	$userName = $_SESSION['nick2change'];
	$changeNick = new Change($userName);
	$changeNick->changeUserName();
} else {
	//no data sended to change then redirect
	header('Location: ../profile.php');
	
}
