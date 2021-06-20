<?php
session_start();
include_once 'configDB.php';
$login_successful = false;

if ( $_POST) {
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);
        try {
            
            $sql = "SELECT * FROM users where email= '".$email."' and password= '".$password."';";
            $result = mysqli_query($conn,$sql);
            $resultCheck= mysqli_num_rows($result);
            $row = mysqli_fetch_assoc($result);
                                    
            if($resultCheck >0){
                if($row['role']=="customer"){
                $_SESSION['name'] = $row['name'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['phone'] = $row['phone'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['user_id'] = $row['user_id'];
              
                header("Location: index.php?category=all");
                exit();
            } else if($row['role']=="admin"){
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['role'] = $row['role'];
                
                header("Location: admin.php");
            }
            }else{
            
            //  <script>
            //     alert("Wrong email or password!"); </script>
                
                header("Location: login.php");
                
                }
        }catch (Exception $e) {
            echo "Error " . $e->getMessage();
            exit();
        }
    

    
}else{
    exit();
    
}
