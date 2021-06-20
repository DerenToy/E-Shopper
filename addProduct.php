<?php
session_start();

if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
    $page= "Add Product";
    include ("inc/adminhead.php");
    include_once("configDB.php");
    include("connectDB.php");
    
    if ($_POST) {
        $name    = trim($_POST['name']);
        $category = trim($_POST['category']);
        $gender     = trim($_POST['gender']);
        $price   = (float) $_POST['price'];
        $image   = trim($_POST['image']);
        $description = trim($_POST['description']);
    
        try {
            $sql = 'INSERT INTO products(name, price, description,category, gender,image) 
                    VALUES(:name, :price, :description, :category, :gender,:image)';
    
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":price", $price);
            $stmt->bindParam(":description", $description);
            $stmt->bindParam(":category", $category);
            $stmt->bindParam(":gender", $gender);
            $stmt->bindParam(":image", $image);
            $stmt->execute();
          
          
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