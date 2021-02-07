<?php
    require_once("connection.php");
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM tbl_user_info WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $access_type =  $row['access_type'];
            $username = $row['username'];
            $account_id = $row['account_id'];
            if($access_type == "User"){
                session_start();  
                $_SESSION['Logged'] = 1;
                $_SESSION['id'] = $account_id;
                $_SESSION['username'] = $username;
                $_SESSION['access_type'] = $access_type;   
                echo json_encode($access_type);
                  
            } else if ($access_type == "Member") {
                session_start();  
                $_SESSION['Logged'] = 1;
                $_SESSION['id'] = $account_id;
                $_SESSION['username'] = $username;
                $_SESSION['access_type'] = $access_type;   
                echo json_encode($access_type);
                    
            } else if ($access_type == "Group Leader") {
                session_start();  
                $_SESSION['Logged'] = 1;
                $_SESSION['id'] = $account_id;
                $_SESSION['username'] = $username;
                $_SESSION['access_type'] = $access_type;   
                echo json_encode($access_type);
                    
            } else if ($access_type == "Admin") {
                session_start();  
                $_SESSION['Logged'] = 1;
                $_SESSION['id'] = $account_id;
                $_SESSION['username'] = $username;
                $_SESSION['access_type'] = $access_type;   
                echo json_encode($access_type);
                    
            } else if ($access_type == "Superadmin") {
                session_start();  
                $_SESSION['Logged'] = 1;
                $_SESSION['id'] = $account_id;
                $_SESSION['username'] = $username;
                $_SESSION['access_type'] = $access_type;   
                echo json_encode($access_type);
                    
            }
        }
    } else {
        echo json_encode(2);
    }
        
    