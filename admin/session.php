<?php
session_start();
if (!$_SESSION['id'] && $_SESSION['access_type'] !== "Admin"){
	header("location: login.php");
	
}

?>