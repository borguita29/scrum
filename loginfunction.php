<?php
    require_once("connection.php");
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $query = "SELECT * FROM tbl_user_info WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $username = $row['username'];
            $account_id = $row['account_id'];
            $access_type =  $row['access_type'];
           
            
            if($access_type == "User"){
                session_start();  
                $_SESSION['Logged'] = 1;
                $_SESSION['id'] = $account_id;
                $_SESSION['username'] = $username;
                $_SESSION['access_type'] = $access_type;   
                $array = array(  
                    'Access' => $access_type, 
                    'Type' => 1 
                );
                echo json_encode($array);
                  
            } else if ($access_type == "Member") {
                session_start();  
                $_SESSION['Logged'] = 1;
                $_SESSION['id'] = $account_id;
                $_SESSION['username'] = $username;
                $_SESSION['access_type'] = $access_type;   
                $array = array(  
                    'Access' => $access_type, 
                    'Type' => 1 
                );
                echo json_encode($array);
                    
            } else if ($access_type == "Group Leader") {
                session_start();  
                $_SESSION['Logged'] = 1;
                $_SESSION['id'] = $account_id;
                $_SESSION['username'] = $username;
                $_SESSION['access_type'] = $access_type;   
                $array = array(  
                    'Access' => $access_type, 
                    'Type' => 1 
                );
                echo json_encode($array);
                    
            } else if ($access_type == "Admin") {
                session_start();  
                $_SESSION['Logged'] = 1;
                $_SESSION['id'] = $account_id;
                $_SESSION['username'] = $username;
                $_SESSION['access_type'] = $access_type;   
                $array = array(  
                    'Access' => $access_type, 
                    'Type' => 1 
                );
                echo json_encode($array);
                    
            } else if ($access_type == "Superadmin") {
                session_start();  
                $_SESSION['Logged'] = 1;
                $_SESSION['id'] = $account_id;
                $_SESSION['username'] = $username;
                $_SESSION['access_type'] = $access_type;   
                $array = array(  
                    'Access' => $access_type, 
                    'Type' => 1 
                );
                echo json_encode($array);
                    
            }
        }
    } else {
        $array = array(  
            'Type' => 2
        );
        echo json_encode($array);
    }
        
    