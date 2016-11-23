<?php
session_start();

class AccDelete
{
	
	private $nick;
	private $pass;
	private $pass2;
	private $currPass;
	private $id;
	
	public function __construct($nick, $pass, $pass2)
	{
		
		$this->nick = $nick;
		$this->pass = sha1($pass);
		$this->pass2 = sha1($pass2);

	}
	
	public function accDel()
	{
			include_once('connect.class.php');
			
			$sql = ("SELECT id, password FROM user WHERE nick = :nick");
			
			$user = $conn->prepare($sql);
			$user->bindValue(':nick' , $this->nick, PDO::PARAM_STR);
			$user->execute();
			
			$row = $user->fetch(PDO::FETCH_ASSOC);
			$this->currPass = $row['password'];
			$this->id = $row['id'];
						
			//check if current password send by user is valid				
			if($this->pass == $this->currPass) {
					
				//make change in proper row selected by user id
				$sql2 = ("DELETE FROM user WHERE id = :id");
				
				$update = $conn->prepare($sql2);
				$update->bindValue(':id' , $this->id, PDO::PARAM_INT);
				$update->execute();
				
				$_SESSION['is_logged'] == false;
				$_SESSION['account_delete'] = true;
				header('Location: ../index.php');
					
			} else {
				
				$_SESSION['curr_pass_err'] = true;
				header('Location: ../accountdelete.php');
				
			}	
	}//end of accDel

	public function checkData()
	{
			//check  password and validate email
			if($this->pass != $this->pass2) {
				
				$_SESSION['pass_err2'] = true;
				header('Location: ../accountdelete.php');
				
			}	else {
				
				return true;
			}
	}//end of checkData		
		

	
}//end of Change class

if(!isset($_SESSION['is_logged']) || $_SESSION['is_logged'] == false) {
		//no logged user - redirect
			$_SESSION['data_err'] = true;
			header('Location: index.php');
}

if(isset($_POST['accountDelete'])) {

	$userName = $_SESSION['nick'];
	$userPass = $_POST['pass'];
	$checkUserPass = $_POST['pass2'];
	
	$deleteAccount = new AccDelete($userName, $userPass, $checkUserPass);
	
	if($deleteAccount->checkData() == true) {
		
		$deleteAccount->accDel();
		
	}
	
} else {
	//no data sended to change then redirect
	header('Location: ../accountdelete.php');
	
}
