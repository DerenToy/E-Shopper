<?php
    session_start();
    if($_GET){
        
        for ($x = 0; $x <= count($_SESSION['shopping_cart']); $x++)
       {
            if($_SESSION['shopping_cart'][$x]["product_id"] == $_GET["product_id"]) {
                unset($_SESSION['shopping_cart'][$x]);
                break;
            }
       }
       header("Location: cart.php");
       
    
    
    }
    
?>