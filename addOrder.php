<?php
session_start();
include_once 'configDB.php';
include("connectDB.php");

if ($_POST){
    $shipping_address    = trim($_POST['shippingAddress']);
    $country = trim($_POST['country']);
    $city     = trim($_POST['city']);
    $zip_code   = trim( $_POST['zip']);
    $payment_method   = trim($_POST['radios']);
    $user_id = $_SESSION['user_id'];
   
   if(isset($_SESSION['role']) && $_SESSION['role'] == "customer"){
    	if (!empty($_SESSION["shopping_cart"])){
            $total = 0;
            foreach($_SESSION["shopping_cart"] as $keys => $values)  
            {
              $total = $total + $values["product_total"];
            }
    	   $array_product_ids = array();
           $array_product_quantitys = array();
           for ($x = 0; $x <= count($_SESSION['shopping_cart']); $x++)
           {
                array_push($array_product_ids,($_SESSION['shopping_cart'][$x]["product_id"]));
                array_push($array_product_quantitys,($_SESSION['shopping_cart'][$x]["product_quantity"]));
                
           }
         
        }
   
    }
    $product_ids  = implode ( ",",  $array_product_ids );
    $product_ids=substr($product_ids, 0, -1);
    $product_quantitys= implode ( ",",  $array_product_quantitys );
    $product_quantitys=substr($product_quantitys, 0, -1);
  
   
   try {
    $sql = 'INSERT INTO orders(user_id, product_ids, product_quantitys, shipping_address, country, zip_code, city, payment_method, total) 
            VALUES(:user_id, :product_ids, :product_quantitys, :shipping_address, :country, :zip_code, :city, :payment_method, :total)';

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->bindParam(":product_ids", $product_ids);
    $stmt->bindParam(":product_quantitys", $product_quantitys);
    $stmt->bindParam(":shipping_address", $shipping_address);
    $stmt->bindParam(":country", $country);
    $stmt->bindParam(":zip_code", $zip_code);
    $stmt->bindParam(":city", $city);
    $stmt->bindParam(":payment_method", $payment_method);
    $stmt->bindParam(":total", $total);
    $stmt->execute();
    
    unset($_SESSION['shopping_cart']);
    header("Location: index.php?category=all");

} catch (Exception $e) {
    echo "Error " . $e->getMessage();
    exit();
}
 

}




?>