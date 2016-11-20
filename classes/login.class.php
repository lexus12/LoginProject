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
	
	public function addUser()
	{
		
		$user = $this->conn->prepare("SELECT * FROM user WHERE nick = :nick AND password = :password");
		
		$user->bindValue(':nick' , $this->nick, PDO::PARAM_STR);
		$user->bindValue(':password' , $this->password, PDO::PARAM_STR);
		$user->execute();
		//cheks if user exists by counting result
		if ($user->rowCount()) {
			//if exists log user and redirect to page
			$_SESSION['is_logged'] = true;
			$_SESSION['nick'] = $this->nick;
			header('Location: ../userpage.php');
			
		} else {
			//user not found - send an error to log page
			$_SESSION['data_err'] = true;
			header('Location: ../index.php');
			
		}
		
	}//end of verify_data
	
}//end of login class

if(isset($_POST['nick']) && isset($_POST['password'])) {
	
	$nick = $_POST['nick'];
	$password = $_POST['password'];
	
}

$login = new Login($nick, $password, $conn);
$login->addUser();

?>
