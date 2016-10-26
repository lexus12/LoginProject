<?php
session_start();
$_SESSION['zalogowano'] = false;
session_unset();

header('Location: index.php');

?>
