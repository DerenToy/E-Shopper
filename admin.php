<?php
session_start();
if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
    $page= "Admin";
    include ("inc/adminhead.php");


}else{
    include("404.html");

}


?>
