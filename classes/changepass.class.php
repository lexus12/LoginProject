<?php
session_start();

class Change
{
	
	private $nick;
	private $pass;
	private $newpass;
	private $id;
	private $password;
	
	public function __construct($nick, $pass, $newpass)
	{
		
		$this->nick = $nick;
		$this->pass = sha1($pass);
		$this->newpass = sha1($newpass);

	}
	
	public function changePass()
	{
			include_once('connect.class.php');
			
			$sql = ("SELECT id, password FROM user WHERE nick = :nick");
			
			$user = $conn->prepare($sql);
			$user->bindValue(':nick' , $this->nick, PDO::PARAM_STR);
			$user->execute();
			
			$row = $user->fetch(PDO::FETCH_ASSOC);
			$this->id = $row['id'];
			$this->password = $row['password'];
			
			//check if current password send by user is valid				
			if($this->password == $this->pass) {
					
				//make change in proper row selected by user id
				$sql2 = ("UPDATE user SET password = :password WHERE id = :id");
				
				$update = $conn->prepare($sql2);
				$update->bindValue(':password' , $this->newpass, PDO::PARAM_STR);
				$update->bindValue(':id' , $this->id, PDO::PARAM_INT);
				$update->execute();
					
				$_SESSION['passChange'] = true;
				header('Location: ../profile.php');
					
			} else {
				
				$_SESSION['curr_pass_err'] = true;
				header('Location: ../profile.php');
				
			}		
		
	}//end of changeUserName
	
}//end of Change class

if(!isset($_SESSION['is_logged']) || $_SESSION['is_logged'] == false) {
		//no logged user - redirect
			$_SESSION['data_err'] = true;
			header('Location: index.php');
}

if(isset($_SESSION['currpass'])) {

	$userName = $_SESSION['nick'];
	$userPass = $_SESSION['currpass'];
	$newUserPass = $_SESSION['pass2change'];
	
	$changeNick = new Change($userName, $userPass, $newUserPass);
	$changeNick->changePass();
} else {
	//no data sended to change then redirect
	header('Location: ../profile.php');
	
}
