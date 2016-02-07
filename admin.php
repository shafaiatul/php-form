<?php
 session_start(); 
 if( !isset($_SESSION['username']) ) { //if the user is not been set redirect them to login page
 	header("Location: login.php");
 }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Hello, <?php echo $_SESSION['username'] ?></h1>
</body>
</html>