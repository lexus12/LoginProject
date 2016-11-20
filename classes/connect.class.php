<?php

//connect class make a PDO connection
try {
	
	$conn = new PDO('mysql:host=localhost;dbname=users','root','');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
} catch(PDOException $e) {
	
	echo $e->getMessage();
	die();
	
}
