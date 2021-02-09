<?php
session_start();
if (!$_SESSION['id'] && $_SESSION['access_type'] !== "Member"){
	header("location: login.php");
	
}

?>