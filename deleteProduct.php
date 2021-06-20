<?php
session_start();
if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
    $page= "Delete Product";
    require("inc/adminhead.php");
    
    include("connectDB.php");
    
    if (isset($_GET['product_id'])) {
       
        try {
            $sql = 'DELETE FROM products WHERE product_id = :product_id LIMIT 1';
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":product_id", $_GET['product_id'], PDO::PARAM_INT);
            $stmt->execute();
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
