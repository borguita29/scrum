<?php
	// State Connection
		require_once('connection.php');
	// Variable Declaration
		$fname 		= mysqli_real_escape_string($conn, $_POST['fname']);
		$nickname 	= mysqli_real_escape_string($conn, $_POST['nickname']);
		$age 		= mysqli_real_escape_string($conn, $_POST['age']);
		$gender 	= mysqli_real_escape_string($conn, $_POST['gender']);
		$address 	= mysqli_real_escape_string($conn, $_POST['address']);
		$email 		= mysqli_real_escape_string($conn, $_POST['email']);
		$username 	= mysqli_real_escape_string($conn, $_POST['username']);
		$password 	= mysqli_real_escape_string($conn, $_POST['password']);
	// Check if there is an existing username in the database
	$queryUsername = "SELECT * FROM tbl_user_info WHERE username = '$username'";
	// Fetch Query Result
	$Check = $conn->query($queryUsername);
	// Check if there is an existing username from the database
	if($Check->num_rows > 0){
		$array = array(
			'code' => 1,
			'message' => "There is an Existing Username in our Database"
		);
		echo json_encode($array);
	} else {
		// Check if there is an existing name in the database
		$queryName = "SELECT * FROM tbl_user WHERE name = '$fname'";
		// Fetch Query Result
		$nameCheck = $conn->query($queryName);
		// Check if there is an existing username from the database
		if ($nameCheck->num_rows > 0) {
			$array = array(
				'code' => 2,
				'message' => "There is an Existing Name in our Database"
			);
			echo json_encode($array);
		} else {
			// Initial Query
			$queryInit = "INSERT INTO tbl_user (name, nickname, age, gender, address, email) 
			VALUES ('$fname', '$nickname', '$age', '$gender', '$address', '$email')";
			// Fetching Initial Query Result
			$resultInit = $conn->query($queryInit);
			// Checking if initial result has Data
			if ($resultInit === TRUE) {
				// If initial result has data. Insert Secondary info to the second database.
				$QuerySec = "INSERT INTO tbl_user_info (username, password, access_type)
				VALUES ('$username', '$password', 'User')";
				// Fetching secondary Query Result
				$resultSec = $conn->query($QuerySec);
				// Checking if Secondary Query Result has result
				if ($resultSec === TRUE) {
					$array = array(
						'code' => 3,
						'message' => "Registration Success."
					);
					echo json_encode($array);
				}
			}
		}
	}
	$conn->close();
?>



















