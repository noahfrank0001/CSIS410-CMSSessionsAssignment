<!DOCTYPE html>
<html lang="en"> <!-- this specifies that the language in the document is english -->
<head>
	<!-- These are the meta tags so the webpage can be identified by a search engine -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- This links to the CSS stylesheet -->
	<link rel="stylesheet" type="text/css" href="css-styles.css">
	<!-- This is the webpages title -->
	<title>About Us</title>
</head>
<body>
	<!-- This nav bar is for navigating between the home, about us, php configuration, and contact pages -->
	<nav class="nav-bar">
		<a href="index.html" class="nav-item">Home</a>
		<a href="aboutus.php" class="nav-item">About Us</a>
		<a href="configuration.php" class="nav-item">PHP Configuration</a>
		<a href="contactus.php" class="nav-item">Contact</a>
	</nav>
	<!-- This link bar is for navigating between the 8 assignments submitted throughout the course -->
	<div class="link-bar">
		<a href="foundations.php" class="nav-item">Module 1: Week 1 Foundations</a>
		<a href="variables.php" class="nav-item">Module 1: Week 1 Variables</a>
		<a href="" class="nav-item">Module 2: Week 2 Forms</a>
		<a href="" class="nav-item">Module 3: Week 3 Arrays</a>
		<a href="" class="nav-item">Module 4: Week 4 Sessions</a>
		<a href="" class="nav-item">Module 5: Week 5 CMS Sessions</a>
		<a href="" class="nav-item">Module 6: Week 6 Database</a>
		<a href="" class="nav-item">Module 8: Week 8 CMS Database</a>
	</div>
	<p>
		<h1>
			<b> <?php echo "Greetings from Gaming Hardware Plus!" ?> </b>
		</h1>
		<?php echo "<p>Here at Gaming Hardware Plus, we believe in a fair price so that gamers can do what they love: gaming. We believe that we should not be dishonest with out customers and we always keep the Bible verse Proverbs 12:22 in mind, which says <q>Lying lips are an abomination to the Lord, but those who act faithfully are his delight.</q> (ESV). We base our honesty of our faith in God and believe that it is far better to be honest and lose some potential profit, rather than be hishonest and swindel our customers. If you like what you see on the website, please consider buying or sharing with our Social Media links on each product page. Happy Gaming!</p>"; ?>
		<?php echo "- The Gaming Hardware Plus Team." ?>
	</p>

	<br>
	<footer id="footer">
		<?php include "footer.php" ?>
	</footer>
</body>
</html>