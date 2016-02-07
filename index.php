<?php
	// if( !empty($_POST) ) {

	// 	print_r($_POST);

	// }

	echo $_SERVER['REQUEST_METHOD'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Post Request</title>
</head>
<body>
	
	<h1>Contact Form</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="name">Name: </label>
				<input type="text" name="name">
			</li>
			<li>
				<input type="submit" value="Go!">
			</li>
		</ul>
	</form>
</body>
</html>