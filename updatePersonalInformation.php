<?php
session_start();
include("connectDB.php");

if ($_POST) {
    $name = trim($_POST['name']);
    $lastname    = trim($_POST['lastname']);
    $email   = trim($_POST['email']);
    $phone     = (int) $_POST['phone'];
    
   
    $user_id = $_SESSION['user_id'];
    try {
        $sql = 'UPDATE users 
                SET name = :name, lastname = :lastname, email = :email, phone = :phone WHERE user_id = :user_id';

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":lastname", $lastname);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->execute();
        $_SESSION['name']= $name;
        $_SESSION['lastname']= $lastname;
        $_SESSION['email']= $email;
        $_SESSION['phone']= $phone;
        
        header("Location: account.php");
        exit();
    } catch (Exception $e) {
        echo "Error " . $e->getMessage();
        exit();
    }

}
   
                    
                    
?>