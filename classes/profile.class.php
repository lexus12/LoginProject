<?php
session_start();
//page will get a values to change and redirect to proper class
if(isset($_POST['changeNick'])) {
	
	$_SESSION['nick2change'] = $_POST['nick'];
	header('Location: changename.class.php');
	
}

if(isset($_POST['changePass'])) {
	
	$_SESSION['currpass'] = $_POST['pass'];
	$_SESSION['pass2change'] = $_POST['newpass'];
	header('Location: changepass.class.php');
	
}

if(isset($_POST['changeEmail'])) {
	
	$_SESSION['email2change'] = $_POST['email2change'];
	header('Location: changeemail.class.php');
	
}
