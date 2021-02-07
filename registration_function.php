

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scrumio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST['fname'];
$nickname = $_POST['nickname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "INSERT INTO tbl_user (name, nickname, age, gender, address, email) 
VALUES ('$fname', '$nickname', '$age', '$gender', '$address', '$email')";

$sql2 = "INSERT INTO tbl_user_info (username, password)
VALUES ('$username', '$password')";

if (!$fname || !$nickname || !$age || !$gender || !$address || !$email || !$username || !$password) {
	echo '<div class="col-xl-12 alert alert-danger" role="alert" >YOU MUST FILL IN ALL THE FIELDS !!!</div>';
	exit; 
} else {

	$query = mysqli_query($conn, $sql);
	$query2 = mysqli_query($conn, $sql2);
}


if ($query & $query2 === TRUE) {
  echo "New record created successfully";
}

else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>



















