<?php 
	$dbhost = "localhost";
	$dbuser= $_POST['user'];
	$dbpass= $_POST['pwd'];
	$dbname = "flipped4db";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if(mysqli_connect_errno()) { 
		die("Database connection failed because there was a fuckup");
	} else {
		header('Location: museum.php');
	}
	exit;
?>
