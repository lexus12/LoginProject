<?php
session_start();
//page will get a values to change and redirect to proper class
if(isset($_POST['changeNick'])) {
	
	$_SESSION['nick2change'] = $_POST['nick'];
	header('Location: changename.class.php');
	
}

