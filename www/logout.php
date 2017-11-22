<?php  
error_reporting(E_ALL & ~E_NOTICE);
session_start();
session_destroy();

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