<?php
session_start();
if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
    $page= "Update Product";
    
        if(isset($_GET['product_id'])){    
           include("connectDB.php");
            if (isset($_GET['product_id'])) {
            
                try{
                    if ($_POST) {
                        $name = trim($_POST['name']);
                        $category    = trim($_POST['category']);
                        $gender   = trim($_POST['gender']);
                        $price     = (int) $_POST['price'];
                        $image   = trim($_POST['image']);
                        $description = trim($_POST['description']);
                    
                        try {
                            $sql = 'UPDATE products 
                                        SET name = :name, category = :category, gender = :gender, price = :price, image = :image, description = :description 
                                    WHERE product_id = :product_id';
                    
                            $stmt = $conn->prepare($sql);
                            $stmt->bindParam(":name", $name);
                            $stmt->bindParam(":category", $category);
                            $stmt->bindParam(":gender", $gender);
                            $stmt->bindParam(":price", $price);
                            $stmt->bindParam(":image", $image);
                            $stmt->bindParam(":description", $description);
                            $stmt->bindParam(":product_id", $_GET['product_id'], PDO::PARAM_INT);
                            $stmt->execute();
                            header("Location: updateProduct.php");
                            exit();
                        } catch (Exception $e) {
                            echo "Error " . $e->getMessage();
                            exit();
                        }
                                
                        } else {
                            exit();
                        }
            
            
            
                }catch (Exception $e) {
                    echo "Error " . $e->getMessage();
                    exit();
                }
            
              
            }
        
        }else{
        include("inc/adminhead.php");
        }

    }else{
        include("404.html");
    
    }
    
?>

