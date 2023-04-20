<?php 
session_start();

if (!(isset($_SESSION['cart']))) {
	$_SESSION['cart'];
}

if (isset($_GET['clear'])) {
	$_SESSION['cart'] = array();
}

include "dbConnect.php";
$result = "SELECT * FROM products";

 ?>

 <!DOCTYPE html>
<html lang="en"> <!-- this specifies that the language in the document is english -->
<head>
	<!-- These are the meta tags so the webpage can be identified by a search engine -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- This links to the CSS stylesheet -->
	<link rel="stylesheet" type="text/css" href="css-styles.css">
	<!-- This is the webpages title -->
	<title>Cart</title>
</head>
<body>
	<?php include "menu.php"; ?>
	<?php include "cms_header.php"; ?>
	<?php include "dbConnect.php"; ?>
	<?php 
	// if (!isset($_SESSION['username'])) {
	// 	echo "<script>alert('Username and Password invalid. Please try again.')</script>";
	// 	echo "<script>location.href='cms_sessions.php'</script>";
	// } else {
	// 	if ($_POST['username'] == $usernames[2] && $_POST['password'] == $passwords[2]){
	// 		echo "<a href='$product1[2]'><div class='totalProduct'><div class='product'> <div class='productImage'><img src='$product1[1]' height='100'></div> <div class='productInfo'>$product1[0] <br>$product1[3]</div> </div></div></a>";
	// 		echo "<a href='$product2[2]'><div class='totalProduct'><div class='product'> <div class='productImage'><img src='$product2[1]' height='100'></div> <div class='productInfo'>$product2[0] <br>$product2[3]</div> </div></div></a>";
	// 		echo "<a href='$product3[2]'><div class='totalProduct'><div class='product'> <div class='productImage'><img src='$product3[1]' height='100'></div> <div class='productInfo'>$product3[0] <br>$product3[3]</div> </div></div></a>";
	// 		echo "<a href='$product4[2]'><div class='totalProduct'><div class='product'> <div class='productImage'><img src='$product4[1]' height='100'></div> <div class='productInfo'>$product4[0] <br>$product4[3]</div> </div></div></a>";
	// 		echo "<a href='$product5[2]'><div class='totalProduct'><div class='product'> <div class='productImage'><img src='$product5[1]' height='100'></div> <div class='productInfo'>$product5[0] <br>$product5[3]</div> </div></div></a>";
	// 		echo "<a href='$product6[2]'><div class='totalProduct'><div class='product'> <div class='productImage'><img src='$product6[1]' height='100'></div> <div class='productInfo'>$product6[0] <br>$product6[3]</div> </div></div></a>";
	// 		echo "<a href='$product7[2]'><div class='totalProduct'><div class='product'> <div class='productImage'><img src='$product7[1]' height='100'></div> <div class='productInfo'>$product7[0] <br>$product7[3]</div> </div></div></a>";
	// 		echo "<a href='$product8[2]'><div class='totalProduct'><div class='product'> <div class='productImage'><img src='$product8[1]' height='100'></div> <div class='productInfo'>$product8[0] <br>$product8[3]</div> </div></div></a>";
	// 		echo "<a href='$product9[2]'><div class='totalProduct'><div class='product'> <div class='productImage'><img src='$product9[1]' height='100'></div> <div class='productInfo'>$product9[0] <br>$product9[3]</div> </div></div></a>";
	// 		echo "<a href='$product10[2]'><div class='totalProduct'><div class='product'> <div class='productImage'><img src='$product10[1]' height='100'></div> <div class='productInfo'>$product10[0] <br>$product10[3]</div> </div></div></a>";
	// 	} elseif ($_POST['username'] == $usernames[1] && $_POST['password'] == $passwords[1]) {
	// 		echo "<h1>Welcome Publisher!</h1>";
	// 	} elseif ($_POST['username'] == $usernames[0] && $_POST['password'] == $passwords[0]) {
	// 		echo "<h1>Welcome Admin!</h1>";
	// 	} else {
	// 		echo "<script>alert('Username and Password invalid. Please try again.')</script>";
	// 		echo "<script>location.href='cms_sessions.php'</script>";
	// 	}
	// }
	?>

	<a href="cmsLanding.php" class="prodButton">< Products</a>

	<table>
		<tr>
			<th>Item</th><th>Price</th><th>Quantity</th><th>Subtotal</th>
		</tr>
	<?php 
		$grandTotal = 0;
		foreach ($_SESSION['cart'] as $key => $value) {
			$sql_table = "SELECT * FROM products WHERE productid = '$key'";
			$results = mysqli_query($dbc, $sql_table) or die ("Bad SQL: $sql_table");
			$row = mysqli_fetch_assoc($results);
			$subtotal = $value * $row['productPrice'];
			$grandTotal += number_format($subtotal * 1.06, 2);

			echo "
				<tr>
					<td>{$row['productName']}</td>
					<td>{$row['productPrice']}</td>
					<td>$value</td>
					<td>$subtotal</td>
				</tr>
			";
		}
	 
	 echo "<tr><td colspan='4'>Grand Total: $grandTotal</td></tr>"

	 ?>
	</table>
	<br>
	<footer id="footer">
		<?php include "footer.php" ?>
	</footer>
</body>
</html>