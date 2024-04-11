<?php


session_start();

#redirect if not logged in
if(!isset($_SESSION['idUser']))
{require('login_tools.php'); load();}

$page_title = 'Goodbye';
include ('header.html');

#clear existing variables
$_SESSION = array();

session_destroy();

echo '<h1>Goodbye!</h1><p>You are now logged out.</p><p>'.'<a href="login.php">Login</a></p>';

include ('footer.html');


?>