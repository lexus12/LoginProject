<?php
session_start();

include_once('connect.class.php');

class Login
{
	
	private $nick;
	private $password;
	private $conn;
	
	public function __construct($nick, $password, $conn)
	{
		
		$this->nick = $nick;
		$this->password = sha1($password);
		$this->conn = $conn;
		
	}
	
	public function loginUser()
	{
		$sql = "SELECT nick, email, user_privilege FROM user WHERE nick = :nick AND password = :password";
		$user = $this->conn->prepare($sql);
		
		$user->bindParam(':nick' , $this->nick, PDO::PARAM_STR, 40);
		$user->bindParam(':password' , $this->password, PDO::PARAM_STR, 60);
		$user->execute();
		
		foreach($user as $row) {
			$nick = $row['nick'];
			$email = $row['email'];
			$privil = $row['user_privilege'];
		}
		
		if ($user->rowCount()) {
			//if exists log user and redirect to page
			$_SESSION['is_logged'] = true;
			$_SESSION['nick'] = $nick;
			$_SESSION['email'] = $email;
			$_SESSION['user_privilege'] = $privil;
			header('Location: ../userpage.php');
			
		} else {
			//user not found - send an error to log page
			$_SESSION['data_err'] = true;
			header('Location: ../index.php');
			
		}
		
	}//end of loginUser
	
}//end of login class

if(isset($_POST['nick']) && isset($_POST['password'])) {
	
	$nick = $_POST['nick'];
	$password = $_POST['password'];
	
}

$login = new Login($nick, $password, $conn);
$login->loginUser();

?>
