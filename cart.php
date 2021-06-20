<?php

$page= "Cart";
include ("inc/head.php");

?>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Product</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php
	
if(isset($_SESSION['role']) && $_SESSION['role'] == "customer"){

							
	
	if (!empty($_SESSION["shopping_cart"])){
		
		foreach($_SESSION["shopping_cart"] as $keys => $values)  
	                               {  
			include("cartProduct.php");
								   }
	}else{
		?> <td class="text-center"> <?php
			echo("There is no product in your cart!!"); ?>
		</td>
		<?php	}?>

	

<?php	
}else{?>
	<td class="text-center"> <?php
	echo("Please sign in!!"); ?>
</td>
<?php	}?>
<tr>
	</tbody>
	</table>
	</div>
	</div>

	</section>
	<div class="total-price d-flex justify-content-end">
<table>
    <tr>
	<td>Total</td>
   <?php 
   if (!empty($_SESSION["shopping_cart"])){
   $totalPrice = 0;
   foreach($_SESSION["shopping_cart"] as $keys => $values)  
   {
     $totalPrice = $totalPrice + $values["product_total"];
   }
	                             ?>
    
        <td class="total_price">$<?= $totalPrice ?></td>
        
        
 </tr>
 <tr>
 <td><a href="index.php?category=all"><button class="btn btn-primary orange" >Continue Shopping</button></a></td>
<td><a href="checkout.php"><button class="btn btn-primary orange" >Checkout</button></a></td>
							   
 </tr>
      <?php  }?>
    
</table>

</div>
	<?php
include ("inc/footer.php");
?>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>

    <script src="js/main.js"></script>
							</body>
							</html>