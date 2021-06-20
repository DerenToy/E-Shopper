<?php
session_start();
include_once 'configDB.php';
include("connectDB.php");

if ($_POST) {
    $name    = trim($_POST['name']);
    $lastname = trim($_POST['lastname']);
    $email     = trim($_POST['email']);
    $phone   = (int) $_POST['phone'];
    $password   = trim($_POST['password']);
    $verifyPassword = trim($_POST['verifyPassword']);
    $role = "customer";
    if($password != $verifyPassword){
        header("Location: login.php");
    }else{
        try {
            $sql = 'INSERT INTO users(name, lastname, email,phone, password,role) 
                    VALUES(:name, :lastname, :email, :phone, :password, :role)';
    
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":lastname", $lastname);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":password", $password);
            $stmt->bindParam(":role", $role);   
            $stmt->execute();
           
        
        } catch (Exception $e) {
            echo "Error " . $e->getMessage();
            exit();
        }
        
         header("Location: login.php");
    }
    
} else {
    exit();
}
?>