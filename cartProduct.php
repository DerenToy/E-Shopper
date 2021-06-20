<tr>
<td class="cart_product text-center"> 
    <a href=""><img src="<?=$values["product_image"]?>" alt=""></a>
</td>

<td class="cart_description"> 
    <h4><a href=""><?=$values["product_name"]?></a></h4>  

</td>

<td class="cart_price">
<p>$<?=$values["product_price"]?></p> 
</td>

<td class="cart_quantity">
<div class="cart_quantity_button">
<a class="cart_quantity_up" href=""> + </a>
<input class="cart_quantity_input" type="text" name="quantity" value="<?= $values["product_quantity"]?>" autocomplete="off" size="2">
<a class="cart_quantity_down" href=""> - </a>
</div>
</td>

<td class="cart_total">
<p class="cart_total_price">$<?= $values["product_total"]?></p>
</td>

<td class="cart_delete">


<a class="cart_quantity_delete" href="removeProductFromCart.php?product_id=<?=$values["product_id"]?>"><i class="fa fa-times"></i></a>


</td>
</tr>