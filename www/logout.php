<?php  
error_reporting(E_ALL & ~E_NOTICE);
session_start();
$_SESSION['login-status'] = false;
header('Location:login.php');

?>


<!DOCYTPE html>
<html>

<head>
	<h3>You are logged out.</h3>
</head>
<body>
<a href="login.php">Login</a>
</body>
</html>