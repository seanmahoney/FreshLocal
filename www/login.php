<?php
 error_reporting(E_ALL & ~E_NOTICE);
 session_start();
 


function clean($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

 if($_POST['submit']) {
  $dbUserName = "admin";
  $dbPassword =  "password";
  
  $username = clean($username);
  $password = clean($password);
  
  if ($username == $dbUserName && $password == $dbPassword) {

   $_SESSION['username'] = $username;
   $_SESSION['password'] = $password;
   header('Location: admin.php');
  }// } else{
  //  echo "Wrong username or password.";
  // }
 }
if ($_POST['submit']) {
	include_once("config.php");
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);
	
	$sql = "SELECT userId, userName, password FROM freshLocal_users WHERE userName = '$username' AND password='$password'";
	$query = mysqli_query($con, $sql);
	
	if ($query) {
		$row = mysqli_fetch_row($query);
		$userId = $row[0];
		$dbUsername = $row[1];
		$dbPassword = $row[2];
	}
	
	if ($username == $dbUsername && $password == $dbPassword) {
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $userId;
		header('Location: marketHome.php');
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
  
  <form method="post" action="login.php" id="login">
	<input type="text" placeholder="Username" name="username" /><br />
	<input type="password" placeholder="Password" name="password" /><br />
	<input type="submit" name="submit" value="Log In" />

</form>
  <p>If you don't have an account </p><a href="registrationType.php">Sign Up Here</a>
 </body>
</html>
