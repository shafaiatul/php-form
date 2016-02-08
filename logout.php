<?php 
//we always have to start the session
session_start();

//when somebody visit this page we destroy the session
session_destroy(); 
// and reinitialize the super global session to an array
$_SESSION = array();

//then header back to login.php
header("Location: login.php");


?>
