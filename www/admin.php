<?php
	error_reporting(E_ALL & ~E_NOTICE);
	include 'function.php';
	get_header();
	session_start();
	if($_SESSION['username']!="admin" && $_SESSION['password']!="password"){
		header("Location:login.php");
		exit();
	}


	
?>
<!DOCTYPE html>
<html>
     
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<title>Admin Panel</title>
	
	<script>
function trueFunction()
{
alert("User has been deleted!"); // this is the message in ""
}



</script>

</head>
<body>

<ul>
  <li><a href="admin.php">Users</a></li>
  <li><a href="adminFarmer.php">Farmers</a></li>
</ul>



<h1 style ="text-align: center;">Welcome to the Admin Panel</h1>

<table width="1000" border="5" align="center">
<tr>
		<td colspan="4" align="center" bgcolor="yellow"><h1> All Users</h1></td>
</tr>

<tr><form action = "admin.php" method = "post">
		<th>User ID</th>
		<th>Username</th>
		<th>Email</th>
		<th>Delete post</th>
	
		
</tr>


<?php

		

include_once("config.php");
	
	$sql = "SELECT * FROM `freshLocal_users` ORDER BY userId DESC";
	$query = mysqli_query($con, $sql);

	
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['userId'];
		$username= $row['userName'];
		$email = $row['email'];

	
?>

<tr>
	<td><?php echo $id; ?></td>
	<td><?php echo $username; ?></td>
	<td><?php echo $email; ?></td>

	<td><input type ="submit" onclick="trueFunction()" id="submit" name= "submit" value="Delete" required></td>

	
	
</tr>



<?php
	}
	
	
	
	//DELETE QUERY
	if ($_POST['submit']) {
	   include_once("config.php");
	   mysqli_query($con, "DELETE FROM `freshLocal_users` WHERE userId = $id");
		
		echo '<script>truefunction()</script>';
		header("Refresh:0");
	}
	
?> 

	
	



</table>

	<br /> 
	</body>
	</html>