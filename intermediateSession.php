<?php 
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

echo "<script>location.href='cmsLanding.php'</script>";
 ?>