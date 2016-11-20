<?php
session_start();
session_unset();
$_SESSION['is_logged'] = false;

header('Location: ../index.php');

?>
