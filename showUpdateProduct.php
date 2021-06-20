<div class="col-sm-4" id="<?=$row['product_id'] ?>">
    	<div class="product-image-wrapper">
    	    <div class="single-products">
    			<div class="productinfo text-center">
    				<img src="<?= $row['image'] ?>" alt="" />
    				<h2><?= $row['price'] ?>$</h2>
    				<h2><?= $row['name'] ?></h2>
    				<p class="productDescription"><?= $row['description'] ?></p>
    				<a href="editProduct.php?product_id=<?= $row['product_id'] ?>" type="submit" class="btn btn-info"/>Update</a>
    			</div>
    		</div>
    	</div>
</div>