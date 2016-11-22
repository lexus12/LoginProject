<?php
session_start();

class Change
{
	
	private $nick;
	private $email;
	private $id;
	
	public function __construct($nick, $email)
	{
		
		$this->nick = $nick;
		$this->email = $email;
		
	}
	
	public function changeUserEmail()
	{
			include_once('connect.class.php');
			
			$sql = ("SELECT * FROM user WHERE nick = :nick");
			
			$user = $conn->prepare($sql);
			$user->bindValue(':nick' , $this->nick, PDO::PARAM_STR);
			$user->execute();
			$row = $user->fetch(PDO::FETCH_ASSOC);
			$this->id = $row['id'];
			//if user exists then redirect and tell user about it
						
			//check if current password send by user is valid				
			if($user->rowCount()) {
					
				//make change in proper row selected by user id
				$sql2 = ("UPDATE user SET email = :email WHERE id = :id");
				
				$update = $conn->prepare($sql2);
				$update->bindValue(':email' , $this->email, PDO::PARAM_STR);
				$update->bindValue(':id' , $this->id, PDO::PARAM_INT);
				$update->execute();
				
				$_SESSION['email'] = $this->email;
				$_SESSION['emailChange'] = true;
				header('Location: ../profile.php');
					
			} else {
				
				$_SESSION['register_err'] = true;
				header('Location: ../profile.php');
				
			}
	}//end of changeUserName
	
	public function checkData()
	{
		//check  password and validate email
		if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
			
			$_SESSION['email_err'] = true;
			header('Location: ../profile.php');
			
		} else {
			
			return true;
			
		}	
		
	}//end of checkData function
	
}//end of Change class

if(!isset($_SESSION['is_logged']) || $_SESSION['is_logged'] == false) {
		//no logged user - redirect
			$_SESSION['data_err'] = true;
			header('Location: index.php');
}

if(isset($_SESSION['email2change'])) {

	$userName = $_SESSION['nick'];
	$userEmail = $_SESSION['email2change'];
	
	$changeEmail = new Change($userName, $userEmail);
	//check if email is correct then change user
	if($changeEmail->checkData() == true) {
		
		$changeEmail->changeUserEmail();
		
	}

} else {
	//no data sended to change then redirect
	header('Location: ../profile.php');
	
}
