<div class="col-sm-4">
	<div class="product-image-wrapper">
	    <div class="single-products">
			<div class="productinfo text-center">
			<form method="post" action="index.php?category=all&product_id=<?= $row['product_id'] ?>">
				<img src="<?= $row['image'] ?>" alt="" />
				<input type="hidden" name="hidden_image" value="<?= $row['image'] ?>" />
				<h2><?= $row['price'] ?>$</h2>
				<input type="hidden" name="hidden_price" value="<?= $row['price'] ?>" />
				<h2><?= $row['name'] ?></h2>
				<input type="hidden" name="hidden_name" value="<?= $row['name'] ?>" />
				<p class="productDescription"><?= $row['description'] ?></p>
				<input type="hidden" name="hidden_quantity" value="1" />
				<input type="hidden" name="hidden_total" value="<?= $row['price']?>" />
				<input type="submit" name="addToCart" class="btn btn-default add-to-cart" value="Add to cart"/>
				</form>
			</div>
		</div>
	</div>
</div>
