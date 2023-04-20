<?php echo "Page last changed: ".date("F d Y H:i:s.", filemtime("./log/changelog.txt")); ?>
<div class="footerdiv">
	<img src="https://www.w3.org/Icons/valid-html401-blue">
	<img src="https://www.w3.org/Icons/valid-css-blue">
	<a href="logout.php"><input type="button" value="Logout" name="logout" onclick="return confirm('Are you sure you want to logout?')"></a>
</div>