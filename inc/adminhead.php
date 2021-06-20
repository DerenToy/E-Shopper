<?php
require('configDB.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?=$page ?> | E-Shopper</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	
	
</head>

<body>
<div class="header-middle">
			<!--header-middle-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="logo pull-left">
						<a href="admin.php"><img src="img/home/logo.png" alt="" /></a> <!-- silicem bunu -->
					</div>
					
				</div>
				<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="logout.php"><i class="fa fa-sign-out"></i>Log Out</a></li>
								
							</ul>
						</div>
            </div>
        </div>
</div>


<section>
<div class="container admin-panel">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>DashBoard</h2>
					<div class="panel-group category-products" id="accordian">
						<!--category-productsr-->

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordian" href="#products">
										<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										Products
									</a>
								</h4>
							</div>
							<div id="products" class="panel-collapse collapse">
								<div class="panel-body">
									<ul>
										<li><a href="searchProduct.php?search=nothing" id="searchProduct">Search Product</a></li>
										<li><a href="addProduct.php" id="addProduct">Add Product</a></li>
										<li><a href="updateProduct.php" id="updateProduct">Update Product</a></li>
										<li><a href="deleteProduct.php" id="deleteProduct">Delete Product</a></li>
										
									</ul>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a href="addAdmin.php">Create New Admin</a></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-9 padding-right">
					<h2 class="title text-center"><?php if($page=="Admin") echo "ADMIN PANEL";
					else if($page=="Add Product") echo "Add Product"; 
					else if($page=="Create New Admin") echo "Create New Admin";
					else if($page=="Delete Product") echo "Delete Product";
					else if($page=="Update Product") echo "Update Product";
					else if($page=="Search Product") echo "Search Product";
					?></h2>
					
					<?php 
					if($page=="Add Product"){
					include ("addProductForm.php"); 
                     }else if($page=="Create New Admin"){
                    include ("addAdminForm.php");
                    }else if($page=="Delete Product"){
                    
						$sql = "SELECT * FROM products;";
						$result = mysqli_query($conn, $sql);
						$resultCheck= mysqli_num_rows($result);
						
						if( $resultCheck > 0 ){
						
							while($row = mysqli_fetch_assoc($result)){ 
								if(isset($_GET['product_id'])){
									if ($row['product_id'] !=$_GET['product_id']) {
										include("deleteProductForm.php");
									}
								}else{
									include("deleteProductForm.php");
								}
							}
						}
					
					}else if($page=="Update Product"){
						$sql = "SELECT * FROM products;";
						$result = mysqli_query($conn, $sql);
						$resultCheck= mysqli_num_rows($result);
						
						if( $resultCheck > 0 ){
						
							while($row = mysqli_fetch_assoc($result)){ 
								include ("showUpdateProduct.php");
							}
						}
					}else if($page=="Search Product"){
						
						if($_GET['search']=="nothing"){
							include ("searchProductForm.php");
							
						}
					}
					
					
					?>
		

			</div>
        </div>
</div>
</section>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>

</body>

</body>