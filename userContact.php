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
	<meta name="description" content="gaming, game, keyboard, rgb, budget, gamer">
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
	<br>
	<h1>Contact Us</h1>
	<form>
		<label for="userEmail">Email</label>
		<input type="email" name="userEmail">
		<label for="userName">Name</label>
		<input type="text" name="userName">
		<input type="submit" name="Submit">
	</form>
	
	
	<br>
	<footer id="footer">
		<?php include "footer.php" ?>
	</footer>
</body>
</html>