<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logged in</title>
</head>
<body>

<h1 style ="text-align: center;">Hi there <?php echo $_SESSION['username']; ?>!</h1>
<p>Thanks for logging in!</p>

<?php

	include_once("connection.php");
	
	
	
?> 

	




	<br />
	<a href="">Click here to view profiles</a> 
	<a href="logout.php">Click here to sign out</a>

	</body>
	</html>