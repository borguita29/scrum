<?php
session_start();
if (!$_SESSION['id'] && $_SESSION['access_type'] !== "User"){
	
	header("location: login.php");
	
}

?>