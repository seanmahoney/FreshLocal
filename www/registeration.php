<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
			
		
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			
			include_once("connection.php");
			$sql = "INSERT INTO user (username, password, email) VALUE ('$username', '$password', '$email')";
			mysqli_query($dbCon, $sql);
			
			if ($_POST['signup']) {
			echo "You have been registered. You may now Login";
			
			}
 
  ?>
       
        <?php
 
 
 
 

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration System</title>


</head>
<body>
<center>
<div id="login-form">
<h2>Registeration</h2>
<form method="POST" action="registeration.php">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="username" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="password" placeholder="Your Password" required /></td>
</tr>
</tr>    
<tr>
<td><input type="submit" name="signup" value ="Sign Me Up"/></td>
</tr>
<tr>
<td><a href="login.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
