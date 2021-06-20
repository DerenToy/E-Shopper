<?php
$page= "Edit Product";
include_once 'configDB.php';

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
		
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="logo pull-left">
						<a href="index.php?category=all"><img src="img/home/logo.png" alt="" /></a>
					</div>
                </div>
            </div>
        </div>
</div>


<section>
	<div class="container admin-panel">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Product</h2>
					
						<div class="panel-group category-products" id="accordian">
    						<div class="panel panel-default">
    						<?php
    					    $id= ($_GET['product_id']);
                            $sql = "SELECT * FROM products WHERE product_id = '".$id."' LIMIT 1";
    						$result = mysqli_query($conn, $sql);
                            $resultCheck= mysqli_num_rows($result);
                             if( $resultCheck == 1 ){ 
                              while($row = mysqli_fetch_assoc($result)){ ?>
                                    
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="<?= $row['image'] ?>" alt="" />
                                                    <h2><?= $row['price'] ?>$</h2>
                                                    <h2><?= $row['name'] ?></h2>
                                                    <p class="productDescription"><?= $row['description'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                   
                                <?php } ?>
                        <?php } ?>
                  
						    </div>
                     </div>
				</div>
					
			</div>
	
			<div class="col-sm-9 padding-right">
				<div class="features_items">
					<h2 class="title text-center">Edit Product</h2>
					<div class="card border-danger">   
            <div class="card-body">
                <form action="updateProduct.php?product_id=<?=$id?>" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="category" class="col-form-label">Category</label>
                            <input type="text" class="form-control" id="category" name="category" placeholder="Category" required>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
                            <label for="gender" class="col-form-label">Gender</label>
                            <input type="text" class="form-control" name="gender" id="gender" placeholder="Gender" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="image" class="col-form-label">Image</label>
                            <input type="text" class="form-control" name="image" id="image" placeholder="Image URL">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Description</label>
                        <textarea name="description" id="" rows="5" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-center"><i class="fa fa-check-circle"></i>Update</button>
                </form>
            </div>
</div>
					
                </div>
			</div>
			
		</div>
	</div>
   
</section>
</body>