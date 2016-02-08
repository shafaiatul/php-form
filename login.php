<?php
	include 'config.php'; //for the login credentials
	include 'functions.php';
	session_start();

	
	if ($_SERVER['REQUEST_METHOD'] =='POST') {

		//get the login credential from the 'config.php'
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		//validate user login input against the record 
		//(whether the user is already in the database (in this case in config file))
		if ( validate_user_credentials($username, $password) ) {
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