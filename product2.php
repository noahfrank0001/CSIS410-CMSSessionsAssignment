<?php 
session_start();

if (isset($_GET['pID'])) {
	$pID = $_GET['pID'];
	$quan = $_GET['quan'];

	if (isset($_SESSION['cart'][$pID])) {
		$_SESSION['cart'][$pID] += $quan;
	} else {
		$_SESSION['cart'][$pID] = $quan; 
	}

}

if (isset($_GET['clear'])) {
	$_SESSION['cart'] = array();
}
 ?>


<!DOCTYPE html>
<html lang="en"> <!-- this specifies that the language in the document is english -->
<head>
	<!-- These are the meta tags so the webpage can be identified by a search engine -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="gaming, game, mouse, rgb, budget, gamer">
	<!-- This links to the CSS stylesheet -->
	<link rel="stylesheet" type="text/css" href="css-styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<!-- This is the webpages title -->
	<title>Login</title>
</head>
<body>
	<?php include "menu.php"; ?>
	<?php include "cms_header.php" ?>
	<?php include "dbConnect.php"; ?>

	<a href="cmsLanding.php" class="prodButton">< Products</a>

	<?php 

	$query = "SELECT * FROM products WHERE productid = 2";
		if ($r = mysqli_query($dbc, $query)){
			while ($row = mysqli_fetch_array($r)){
				echo "
				<div class='totalProduct'>
					<div class='product'> 
						<div class='productImage'>
							<img src='./images/ProductImages/{$row['productImg']}' height='200'>
						</div> 
						<div class='productInfo'>
							{$row['productName']} <br>
							\${$row['productPrice']}
							<div class='prodDescript'>
								<p>The HyperFlight Gaming Mouse is designed for top-of-the-line gaming. It is used by pro gamers across several gaming disciplines. Buy yours today and upgrade the way you play! </p>
							</div>
						</div> 
						<div>
							<form action='{$_SERVER['PHP_SELF']}'>
								<select name='quan' id='quan'>
									<option value='1'>1</option>
									<option value='2'>2</option>
									<option value='3'>3</option>
									<option value='4'>4</option>
									<option value='5'>5</option>
								</select>
								<input type='hidden' name='pID' id='pID' value='{$row['productid']}' >
								<input type='submit' value='Add To Cart'>
							</form>
							<div class='twitter'>
								<a href='https://twitter.com/?lang=en' target='_blank'>
									<img src='twitter.png' width='40'> 
								</a>
							</div>
							<div class='twitter'>
								<a href='https://www.reddit.com/' target='_blank'>
									<img src='reddit.png' width='40'> 
								</a>
							</div>
						</div>
					</div>
				</div>
				";
			}
		}

	?>
	
	
	<br>
	<footer id="footer">
		<?php include "footer.php" ?>
	</footer>
</body>
</html>