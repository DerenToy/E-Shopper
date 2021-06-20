<?php
$page= "Home";
include ("inc/head.php");
include_once 'configDB.php';


?>


<body>
<section id="slider">
	<!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<!-- <li data-target="#slider-carousel" data-slide-to="2"></li> -->
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<div class="col-sm-6">
								<h1><span>E</span>-SHOPPER</h1>
								<h2>Summer Collection of 2021</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua. </p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img src="img/home/girl2.jpg" class="girl img-responsive" alt="" />
								<img src="img/home/pricing.png" class="pricing" alt="" />
							</div>
						</div>
						<div class="item">
							<div class="col-sm-6">
								<h1><span>E</span>-SHOPPER</h1>
								<h2>Spring Collection of 2021</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua. </p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img src="img/home/girl1.jpg" class="girl img-responsive" alt="" />
								<img src="img/home/pricing.png" class="pricing" alt="" />
							</div>
						</div>



					</div>

					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>

			</div>
		</div>
	</div>
</section>
<!--/slider-->

<section>
	<div class="container ">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Category</h2>
					<div class="panel-group category-products" id="accordian">
						<!--category-productsr-->

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordian" href="#mens">
										<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										Men
									</a>
								</h4>
							</div>
							<div id="mens" class="panel-collapse collapse">
								<div class="panel-body">
									<ul>
										<li><a href="index.php?category=menTshirt">Tshirt</a></li>
										<li><a href="index.php?category=menJean">Jean</a></li>
										<li><a href="index.php?category=menSweat">Sweat</a></li>
		
									</ul>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordian" href="#womens">
										<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										Women
									</a>
								</h4>
							</div>
							<div id="womens" class="panel-collapse collapse">
								<div class="panel-body">
									<ul>
										<li><a href="index.php?category=womenTshirt">Tshirt</a></li>
										<li><a href="index.php?category=womenJean">Jean</a></li>
										<li><a href="index.php?category=womenDress">Dress</a></li>
										<li><a href="index.php?category=womenSweat">Sweat</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordian" href="#kids">
										<span class="badge pull-right"><i class="fa fa-plus"></i></span>
										Kids
									</a>
								</h4>
							</div>
							<div id="kids" class="panel-collapse collapse">
								<div class="panel-body">
									<ul>
										<li><a href="index.php?category=kidsTshirt">Tshirt</a></li>
										<li><a href="index.php?category=kidsJean">Jean</a></li>
										<li><a href="index.php?category=kidsDress">Dress</a></li>
										<!-- <li><a href="index.php?category=kidsSweat">Sweat</a></li> -->
										<li><a href="index.php?category=kidsToy">Toy</a></li>
										
									</ul>
								</div>
							</div>
						</div>
					
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a href="index.php?category=bags">Bags</a></h4>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a href="index.php?category=shoes">Shoes</a></h4>
							</div>
						</div>
					</div>
					<!--/category-products-->

					<div class="brands_products">
						<!--brands_products-->
						<h2>Brands</h2>
						<div class="brands-name">
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
								<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
								<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
								<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
								<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
								<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
							</ul>
						</div>
					</div>
					<!--/brands_products-->

					
					<div class="shipping text-center">
						<!--shipping-->
						<img src="img/home/shipping.jpg" alt="" style ="margin-bottom: 20px" />
					</div>
					<!--/shipping-->

				</div>
			</div>

			<div class="col-sm-9 padding-right">
				<div class="features_items">
					<!--features_items-->
					<h2 class="title text-center">ALL PRODUCTS</h2>
							
						<?php 
						if(isset($_POST['search'])){
							$search = trim($_POST['search']);
							$sql = "SELECT * FROM products WHERE name LIKE '%".$search."%';";
							$result = mysqli_query($conn,$sql);
							$resultCheck= mysqli_num_rows($result);
							if( $resultCheck > 0 ){
								while($row = mysqli_fetch_assoc($result)){ 
									include("showAllProducts.php");
								}
							}
							
						}else{
							$showCategory= ($_GET['category']);
							if($showCategory == null){
								$showCategory="all";
							}
							if($showCategory=="all" ){
								$sql = "SELECT * FROM products;";
								$result = mysqli_query($conn, $sql);
								$resultCheck= mysqli_num_rows($result);
							
								if( $resultCheck > 0 ){
									while($row = mysqli_fetch_assoc($result)){ 
										include("showAllProducts.php");
									}
								}
							}else if($showCategory=="menTshirt"){
								$sql = "SELECT * FROM products where gender='men' and category='tshirt';";
								$result = mysqli_query($conn, $sql);
								$resultCheck= mysqli_num_rows($result);
								
								if($resultCheck > 0 ){
									while($row = mysqli_fetch_assoc($result)){ 
										include("showAllProducts.php");
									}
								} 
							}
							else if($showCategory=="menJean"){
								$sql = "SELECT * FROM products where gender='men' and category='jean';";
								$result = mysqli_query($conn, $sql);
								$resultCheck= mysqli_num_rows($result);
								
								if($resultCheck > 0 ){
									while($row = mysqli_fetch_assoc($result)){ 
										include("showAllProducts.php");
									}
								} 
							}else if($showCategory=="menSweat"){
								$sql = "SELECT * FROM products where gender='men' and category='sweat';";
								$result = mysqli_query($conn, $sql);
								$resultCheck= mysqli_num_rows($result);
								
								if($resultCheck > 0 ){
									while($row = mysqli_fetch_assoc($result)){ 
										include("showAllProducts.php");
									}
								} 
							}else if($showCategory=="womenTshirt"){
								$sql = "SELECT * FROM products where gender='women' and category='tshirt';";
								$result = mysqli_query($conn, $sql);
								$resultCheck= mysqli_num_rows($result);
								
								if($resultCheck > 0 ){
									while($row = mysqli_fetch_assoc($result)){ 
										include("showAllProducts.php");
									}
								} 
							}else if($showCategory=="womenJean"){
								$sql = "SELECT * FROM products where gender='women' and category='jean';";
								$result = mysqli_query($conn, $sql);
								$resultCheck= mysqli_num_rows($result);
								
								if($resultCheck > 0 ){
									while($row = mysqli_fetch_assoc($result)){ 
										include("showAllProducts.php");
									}
								} 
							}else if($showCategory=="womenDress"){
								$sql= "SELECT * FROM products where gender='women' and category='dress';";
								$result = mysqli_query($conn, $sql);
								$resultCheck= mysqli_num_rows($result);
								
								if($resultCheck > 0 ){
									while($row = mysqli_fetch_assoc($result)){ 
										include("showAllProducts.php");
									}
								} 
							}else if($showCategory=="womenSweat"){
								$sql = "SELECT * FROM products where gender='women' and category='sweat';";
								$result = mysqli_query($conn, $sql);
								$resultCheck= mysqli_num_rows($result);
								
								if($resultCheck > 0 ){
									while($row = mysqli_fetch_assoc($result)){ 
										include("showAllProducts.php");
									}
								} 
							}else if($showCategory=="kidsTshirt"){
								$sql = "SELECT * FROM products where gender='kids' and category='tshirt';";
								$result = mysqli_query($conn, $sql);
								$resultCheck= mysqli_num_rows($result);
								
								if($resultCheck > 0 ){
									while($row = mysqli_fetch_assoc($result)){ 
										include("showAllProducts.php");
									}
								} 
							}else if($showCategory=="kidsJean"){
								$sql = "SELECT * FROM products where gender='kids' and category='jean';";
								$result = mysqli_query($conn, $sql);
								$resultCheck= mysqli_num_rows($result);
								
								if($resultCheck > 0 ){
									while($row = mysqli_fetch_assoc($result)){ 
										include("showAllProducts.php");
									}
								} 
							}else if($showCategory=="kidsDress"){
								$sql = "SELECT * FROM products where gender='kids' and category='dress';";
								$result = mysqli_query($conn, $sql);
								$resultCheck= mysqli_num_rows($result);
								
								if($resultCheck > 0 ){
									while($row = mysqli_fetch_assoc($result)){ 
										include("showAllProducts.php");
									}
								} 
			
							}else if($showCategory=="kidsToy"){
								$sql = "SELECT * FROM products where gender='kids' and category='toy';";
								$result = mysqli_query($conn, $sql);
								$resultCheck= mysqli_num_rows($result);
								
								if($resultCheck > 0 ){
									while($row = mysqli_fetch_assoc($result)){ 
										include("showAllProducts.php");
									}
								} 
							}else if($showCategory=="bags"){
								$sql = "SELECT * FROM products where category='bag';";
								$result = mysqli_query($conn, $sql);
								$resultCheck= mysqli_num_rows($result);
								
								if($resultCheck > 0 ){
									while($row = mysqli_fetch_assoc($result)){ 
										include("showAllProducts.php");
									}
								} 
							}else if($showCategory=="shoes"){
								$sql = "SELECT * FROM products where category='shoe';";
								$result = mysqli_query($conn, $sql);
								$resultCheck= mysqli_num_rows($result);
								
								if($resultCheck > 0 ){
									while($row = mysqli_fetch_assoc($result)){ 
										include("showAllProducts.php");
									}
								} 
								
							}if(isset($_POST["addToCart"])){
								// id varsa bu ürünü eklemem gerek session'a..
								if(isset($_SESSION["shopping_cart"])){
									$product_array_id = array_column($_SESSION["shopping_cart"], "product_id");
									if(in_array($_GET["product_id"], $product_array_id)){
										$idx = array_search($_GET["product_id"], $product_array_id);
										$_SESSION["shopping_cart"][$idx]["product_quantity"] = $_SESSION["shopping_cart"][$idx]["product_quantity"] + 1;
										$_SESSION["shopping_cart"][$idx]["product_total"] = $_SESSION["shopping_cart"][$idx]["product_quantity"] * $_SESSION["shopping_cart"][$idx]["product_price"]  ;										
									}else{
										$count = count($_SESSION["shopping_cart"]);
										$product_array = array(
											'product_id' => $_GET["product_id"],
											'product_name' => $_POST['hidden_name'],
											'product_price' => $_POST['hidden_price'],
											'product_image' => $_POST['hidden_image'],
											'product_quantity' =>  $_POST['hidden_quantity'],
											'product_total' =>  $_POST['hidden_price']
		
										);
										$_SESSION["shopping_cart"][$count] = $product_array;
									}
								}else{
									$product_array = array(
										'product_id' => $_GET["product_id"],
										'product_name' => $_POST['hidden_name'],
										'product_price' => $_POST['hidden_price'],
										'product_image' => $_POST['hidden_image'],
										'product_quantity' =>  $_POST['hidden_quantity'],
										'product_total' =>  $_POST['hidden_total']
									);
									$_SESSION["shopping_cart"][0] = $product_array;
								}
							}
						}
						?>
				
							
				</div>
			</div>
	</div>
</section>


<?php

include ("inc/footer.php");

?>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/main.js"></script>


</body>