<?php
 error_reporting(E_ALL & ~E_NOTICE);
 session_start();
 
 if($_POST['submit']) {
  $dbUserName = "admin";
  $dbPassword =  "password";
  
  $username = strip_tags($_POST["username"]);
  $username = strtolower($username);
  $password = strip_tags($_POST["password"]);
  
  if ($username == $dbUserName && $password == $dbPassword) {

   $_SESSION['username'] = $username;

   header('Location: admin.php');
  } else{
   echo "Wrong username or password.";
  }
 }
if ($_POST['submit']) {
	include_once("connection.php");
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);
	
	$sql = "SELECT id, username, password FROM user WHERE username = '$username'";
	$query = mysqli_query($dbCon, $sql);
	
	if ($query) {
		$row = mysqli_fetch_row($query);
		$userId = $row[0];
		$dbUsername = $row[1];
		$dbPassword = $row[2];
	}
	
	if ($username == $dbUsername && $password == $dbPassword) {
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $userId;
		header('Location: user.php');
	} else {
		echo "Incorrect username or password.";
	}
  
}
 
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
 </head>
 
 <body>
 
  <h2>FreshLocal Login</h2>
  <p>Please Insert your Username and Password to acess the system. Thank you</p>
  
  <form method="post" action="login.php">
	<input type="text" placeholder="Username" name="username" /><br />
	<input type="password" placeholder="Password" name="password" /><br />
	<input type="submit" name="submit" value="Log In" />

</form>
  <p>If you don't have an account </p><a href="registeration.php">Sign Up Here</a>
 </body>
</html>
