<?php
session_start();

include_once('connect.class.php');

class Register
{
	
	private $nick;
	private $password;
	private $password2;
	private $email;
	private $conn;
	
	public function __construct($nick, $password, $password2, $email, $conn)
	{
		
		$this->nick = $nick;
		$this->password = sha1($password);
		$this->password2 = sha1($password2);
		$this->email = $email;
		$this->conn = $conn;
		
	}
	
	public function checkData()
	{
		//check  password and validate email
		if($this->password == '' || strlen($this->password) < 6) {
			
			$_SESSION['pass_err'] = true;
			header('Location: ../register.php');
			
		} elseif($this->password != $this->password2) {
			
			$_SESSION['pass_err2'] = true;
			header('Location: ../register.php');
			
		}	elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
			
			$_SESSION['email_err'] = true;
			header('Location: ../register.php');
			
		} else {
			
			return true;
			
		}	
		
	}//end of checkData function
	
	public function addUser()
	{
		
		$user = $this->conn->prepare("SELECT * FROM user WHERE nick = :nick OR email = :email");
		
		$user->bindValue(':nick' , $this->nick, PDO::PARAM_STR);
		$user->bindValue(':email' , $this->email, PDO::PARAM_STR);
		$user->execute();
		
		if ($user->rowCount()) {
			
			$_SESSION['user_exist_err'] = true;
			header('Location: ../register.php');
			
			
		} else {
			//change this when You add a Admin user to value of 2 - User
			$this->privl = 1;
			$ins = $this->conn->prepare("INSERT INTO user (nick, password, email, user_privilege) VALUES (:nick, :password, :email, :privl)");
		
			$ins->bindValue(':nick' , $this->nick, PDO::PARAM_STR);
			$ins->bindValue(':password' , $this->password, PDO::PARAM_STR);
			$ins->bindValue(':email' , $this->email, PDO::PARAM_STR);
			$ins->bindValue(':privl' , $this->privl, PDO::PARAM_INT);
			$ins->execute();
			
			if ($ins->rowCount() < 1) {
			
			$_SESSION['register_err'] = true;
			header('Location: ../register.php');
					
			}
			
			$_SESSION['user_registered'] = true;
			header('Location: ../index.php');
			
		}
		
	}//end of addUser
	
}//end of Register class


if(isset($_POST['zarejestruj'])) {
	
	$nick = $_POST['nick'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$email = $_POST['email'];

	
	$login = new Register($nick, $password, $password2, $email, $conn);
	
	if($login->checkData() == true) {
		
		$login->addUser();
		
	}
	

}
