<?php
    // State Database Connection 
    require_once("connection.php");
    // Fetching POST Request
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    // Query for selecting user based on their Credentials
    $query = "SELECT * FROM tbl_user_info WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);
    // Checking if there is a result
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Fetching User Data
            $username = $row['username'];
            $account_id = $row['account_id'];
            $access_type =  $row['access_type'];
            if($access_type == "User"){
                // Setting Session Config
                session_start();  
                $_SESSION['Logged'] = 1;
                $_SESSION['id'] = $account_id;
                $_SESSION['username'] = $username;
                $_SESSION['access_type'] = $access_type;   
                // Declaring Array
                $array = array(  
                    'Access' => $access_type, 
                    'Type' => 1 
                );
                // Throwing Json data format to Ajax Success
                echo json_encode($array);
            } else if ($access_type == "Member") {
                // Setting Session Config
                session_start();  
                $_SESSION['Logged'] = 1;
                $_SESSION['id'] = $account_id;
                $_SESSION['username'] = $username;
                $_SESSION['access_type'] = $access_type;  
                // Declaring Array 
                $array = array(  

                    'Access' => $access_type, 
                    'Type' => 1 
                );
                // Throwing Json data format to Ajax Success
                echo json_encode($array);
            } else if ($access_type == "Group Leader") {
                // Setting Session Config
                session_start();  
                $_SESSION['Logged'] = 1;
                $_SESSION['id'] = $account_id;
                $_SESSION['username'] = $username;
                $_SESSION['access_type'] = $access_type;
                // Declaring Array   
                $array = array(  
                    'Access' => $access_type, 
                    'Type' => 1 
                );
                // Throwing Json data format to Ajax Success
                echo json_encode($array);
            } else if ($access_type == "Admin") {
                // Setting Session Config
                session_start();  
                $_SESSION['Logged'] = 1;
                $_SESSION['id'] = $account_id;
                $_SESSION['username'] = $username;
                $_SESSION['access_type'] = $access_type; 
                // Declaring Array  
                $array = array(  
                    'Access' => $access_type, 
                    'Type' => 1 
                );
                // Throwing Json data format to Ajax Success
                echo json_encode($array);
            } else if ($access_type == "Superadmin") {
                // Setting Session Config
                session_start();  
                $_SESSION['Logged'] = 1;
                $_SESSION['id'] = $account_id;
                $_SESSION['username'] = $username;
                $_SESSION['access_type'] = $access_type;   
                // Declaring Array
                $array = array(  
                    'Access' => $access_type, 
                    'Type' => 1 
                );
                // Throwing Json data format to Ajax Success
                echo json_encode($array);
            }
        }
    } else {
        // Throw Json data format 2 if there is no credential meet on the database.
        $array = array(  
            'Type' => 2
        );
        echo json_encode($array);
    }
        
    