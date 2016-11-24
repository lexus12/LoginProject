<?php

session_start();

if(!isset($_SESSION['is_logged']) || $_SESSION['is_logged'] == false) {
		//no logged user - redirect
			$_SESSION['data_err'] = true;
			header('Location: ../index.php');
} else {
	
	include_once('../classes/accountdelete.class.php');
	
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
