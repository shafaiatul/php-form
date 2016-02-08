<?php 

function is_logged_in() {
	return isset($_SESSION['username']);   //for the username who are logged-in during the session?
}

function validate_user_credentials($username, $password) {
	return ($username === USERNAME && $password === PASSWORD); 
}

?>