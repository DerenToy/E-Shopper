<?php 
session_start();
unset($_SESSION['email']);
unset($_SESSION['name']);
unset($_SESSION['lastname']);
unset($_SESSION['phone']);
unset($_SESSION['role']);
unset($_SESSION['username']);
unset($_SESSION['shopping_cart']);
unset($_SESSION['user_id']);
header("Location: index.php?category=all");

?>