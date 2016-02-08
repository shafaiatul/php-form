<?php
 include 'functions.php';

 session_start(); 
 
 if( !is_logged_in() ) { //if the user is not logged in
 	header("Location: login.php");
 	die();
 };

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Hello, <strong style="color: green"><?php echo $_SESSION['username'] ?></strong></h1>
	<a href="logout.php">Logout</a>
</body>
</html>