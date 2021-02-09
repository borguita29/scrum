<?php
session_start();
if (!$_SESSION['id'] && $_SESSION['access_type'] !== "Group Leader"){
	header("location: login.php");
	
}

?>