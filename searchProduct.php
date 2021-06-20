<?php 
session_start();
if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
    ?>
    
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/font-awesome.min.css" rel="stylesheet">
    	<link href="css/animate.css" rel="stylesheet">
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/responsive.css" rel="stylesheet">
    
    <?php 
    
    $page ="Search Product";
    include_once 'configDB.php';
    include("inc/adminhead.php");
    
    
    if(isset($_POST['search'])){
        $search = trim($_POST['search']);
        $sql = "SELECT * FROM products WHERE name LIKE '%".$search."%';";
        $result = mysqli_query($conn,$sql);
        $resultCheck= mysqli_num_rows($result);
         ?>
         <div class="container">
         <div class="col-sm-3">
         </div>
         <div class="col-sm-9 padding-right">
    
        		
            <?php
        if($resultCheck >0){
            while($row = mysqli_fetch_assoc($result)){ 
              include("searchedProduct.php");
                  
            } 
       
        
        }else{
            ?>
            
            <h2 class="text-center" style="color: #FE980F">There is no product with these name!!!</h2>
            <?php
            exit();
        
        }
        ?>    
     </div>
    </div >
    <?php
    }

}else{
    include("404.html");

}


?>

