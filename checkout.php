<?php
$page= "Checkout";
include ("inc/head.php");
?>

	<section >
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div>
	
				<div class="shopper-info">
					<p class="title" style="font-weight: bold; text-align:center">Shopper Information</p>
					
					<form method="post" action="addOrder.php">
                    <div class="row-3">
                        
                        <div class="form-group col-6">
                            <label for="inputAddress">Shipping Address</label>
                            <input type="text" class="form-control" id="inputAddress" name="shippingAddress" placeholder="1234 Main St">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputCountry">County</label>
                            
                            <input type="text" class="form-control" id="inputCountry" name="country" placeholder="England">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity" name="city" placeholder="London">

                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip" name="zip" placeholder="WC2N 5DU">
                        </div>
                    </div>
                    <br>

                    <div class="titlesOfBuy">
                        <strong>Payment Method</strong>
                    </div>
                    
					<div class="row">
                        
                    <div class="papara form-group col-md-6">
                        <input type="radio" class="radio" name="radios" value="papara" id="papara">
                        <img class="payment-icon"
                            src="https://www.alternatifle.com/wp-content/uploads/2019/08/papara-100x100.png"
                            alt="papara" width="40px" height="30px">
                        <span>Papara</span>

                    </div>
                 

                    <div class="wireTransfer form-group col-md-4">
                        <input type="radio" class="radio" name="radios" value="wireTransfer" id="wireTransfer">
                        <span>Wire Transfer</span>

                    </div>
               

                    <div class="creditCard form-group col-md-2">
                        <input type="radio" class="radio" name="radios" value="creditCard" id="creditCard">
                        <span>Credit Card</span>
                    </div>
                  
             
				</div>
	               
		</div>
</section>

 <section id="cart_items">
		<div class="container">
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
			<td colspan="3"><button type="submit" class="btn btn-primary orange buyButton" >Buy</button></td>
		</tr>
		      <?php  }?>
		      
			  </form>
                    
		    
		</table>
		
		</div>
		
		</div>

	</section> 

	
	<?php

include ("inc/footer.php");
?>
	
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>