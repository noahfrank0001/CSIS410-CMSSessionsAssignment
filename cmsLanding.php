<?php 
session_start();

$passwords = array("admin", "publisher", "customer");
$usernames = array("admin", "publisher", "customer");

if (!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}

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
	<meta name="description" content="gaming, game, gaming chair budget, gamer, mouse, mice, rbg, headset, headphones, keyboard, microphone, mousepad">
	<!-- This links to the CSS stylesheet -->
	<link rel="stylesheet" type="text/css" href="css-styles.css">
	<!-- This is the webpages title -->
	<title>Products</title>
</head>
<body>
	<?php include "menu.php"; ?>
	<?php include "cms_header.php"; ?>
	<?php include "dbConnect.php"; ?>
	
	<?php 

	if (!isset($_SESSION['username'])) {
		echo "<script>alert('Username and Password invalid. Please try again. 1')</script>";
		echo "<script>location.href='cms_sessions.php'</script>";
	} else {
		if ($_SESSION['username'] == $usernames[2] && $_SESSION['password'] == $passwords[2]){
			$query = "SELECT * FROM products";
			if ($r = mysqli_query($dbc, $query)){
				while ($row = mysqli_fetch_array($r)) {
					echo "
						<a href='{$row['productPage']}'>
							<div class='totalProduct'>
								<div class='product'> 
									<div class='productImage'>
										<img src='./images/ProductImages/{$row['productImg']}' height='100'>
									</div> 
									<div class='productInfo'>
										{$row['productName']} <br>
										\${$row['productPrice']}
										</a>
										<br><br>
									</div> 
								</div>
							</div>
						";
				}
			}
		} elseif ($_SESSION['username'] == $usernames[1] && $_SESSION['password'] == $passwords[1]) {
			echo "<h1>Welcome Publisher!</h1>";
		} elseif ($_SESSION['username'] == $usernames[0] && $_SESSION['password'] == $passwords[0]) {
			echo "<h1>Welcome Admin!</h1>";
		} else {
			echo "<script>alert('Username and Password invalid. Please try again. 2')</script>";
			echo "<script>location.href='cms_sessions.php'</script>";
		}
	}
	?>
	
	<br>
	<footer id="footer">
		<?php include "footer.php" ?>
	</footer>
</body>
</html>