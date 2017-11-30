<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
	if($_SESSION('username')!="admin" && $_SESSION('password')!="password"){
		header("Location:login.php");
		exit();
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>

<h1 style ="text-align: center;">Welcome to the Admin Panel</h1>

<table width="1000" border="5" align="center">
<tr>
		<td colspan="4" align="center" bgcolor="yellow"><h1> View all Users</h1></td>
</tr>

<tr>
		<th>User ID</th>
		<th>Username</th>
		<th>Password</th>
		<th>Delete post</th>
		<th>Edit post</th>
		
</tr>

<tr>
<?php

include_once("connection.php");
	
	$sql = "SELECT * FROM user ORDER BY id DESC";
	$result = mysqli_query($dbCon, $sql);

	while ($row = mysqli_fetch_array($result)) {
		$id = $row ['id'];
		$username= $row ['username'];
		$password = $row ['password'];

	
?>


	<td><?php echo $id; ?></td>
	<td><?php echo $username; ?></td>
	<td><?php echo $password; ?></td>
	
	
	<td><a href="">Edit</a></td>
	
	
</tr>

</table>

<?php
	}
	
?> 

	
	





	<br />
	<a href="admin.php">Make a blog posting</a> 

	</body>
	</html>