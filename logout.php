<?php 
//we always have to start the session
session_start();

//when somebody visit thi page we destroy the session
session_destroy(); 
// and reinitialize the super global session to an array
$_SESSION = array();

//Delete the Cookies (In next lesson)

//then header back to login.php
header("Location: login.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
</body>
</html>