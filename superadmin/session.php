<?php
session_start();
if (!$_SESSION['id'] && $_SESSION['access_type'] !== "Superadmin"){
	header("location: login.php");
	
}

?>