<?php
session_start();
session_unset();
$_SESSION['is_logged'] = false;
$_SESSION['user_logout'] = true;

header('Location: ../index.php');

?>
