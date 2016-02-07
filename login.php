<?php

	session_start();

	define('USERNAME', 'shafaiatul');
	define('PASSWORD', '1234');
	

	if ($_SERVER['REQUEST_METHOD'] =='POST') {
		// get their values
		$username = $_POST['username'];
		$password = $_POST['password'];

		//validate that against the record (whether the user is already in the database or not)
		if($username === USERNAME && $password === PASSWORD) {
			//the credentials are correct 

			//login (log the user in) + set the session and redirect the user to admin.php
			$_SESSION['username'] = $username;
			header("Location: admin.php");
		} else {
			$status = "Incorrect login Credentials.";
		}
		

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Login</h1>
	<form action="login.php" method="post">
		<ul>
			<li>
				<label for="username">Username: </label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password: </label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<input type="submit" value="Login">
			</li>
		</ul>

		<?php if( isset($status) ) : ?>
		<p style="color: red"><?php echo $status; ?></p>
		<?php endif; ?>
	</form>
</body>
</html>