<div class="storeMenu">
	<?php 
	$totalQuant = 0;
	foreach ($_SESSION['cart'] as $key => $value) {
		$totalQuant += $value;
	}

	?>
	<h1>Gaming Hardware Plus</h1> 
	<div class="cart">
		<div class="contact">
			<a href="userContact.php">Contact Us</a>
		</div>
		<div class="emptyCart">
			<a href='<?php echo $_SERVER['PHP_SELF']; ?>?clear=1'>Empty Cart</a>			
		</div>
		<a href="cart.php"><img src="shoppingCart.png" width="50"><br>
		Cart(<?php echo "$totalQuant" ?>)</a>
	</div>
</div>

