<?php
session_start();
if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
    $page= "Create New Admin";
    include ("inc/adminhead.php");
    
    include_once 'configDB.php';
    
    include("connectDB.php");
    
    
    if ($_POST) {
        $username    = trim($_POST['username']);
        $email     = trim($_POST['email']);
        $password   = trim($_POST['password']);
        $role = "admin";
        try {
            $sql = 'INSERT INTO users(username, email, password, role) 
                    VALUES(:username, :email,:password, :role)';
    
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":role", $role);
            $stmt->execute();
            
            $_SESSION['role'] = $role;
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;
            
            
            exit();
        } catch (Exception $e) {
            echo "Error " . $e->getMessage();
            exit();
        }
        
    
        
    } else {
        exit();
    }

}else{
    include("404.html");

}
?>