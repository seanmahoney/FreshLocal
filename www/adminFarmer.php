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
	alert("Farmer has been deleted!"); // this is the message in ""
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
		<td colspan="4" align="center" bgcolor="#4CAF50"><h1> All Farmers</h1></td>
</tr>

<tr><form action = "adminFarmer.php" method = "post">
		<th>User ID</th>
		<th>Name</th>
		<th>Profile</th>
		<th>Phone Number</th>
		<th>Email</th>
		<th>Video link</th>
	
		
</tr>


<?php

		

include_once("config.php");
	
	$sql = "SELECT * FROM `Farmers` ORDER BY id DESC";
	$query = mysqli_query($con, $sql);

	
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['ID'];
		$name= $row['Name'];
		$profile = $row['Profile'];
		$phone = $row['PhoneNumber'];
		$email = $row['Email'];
		$video = $row['Video_link'];
		$faq = $row['FAQ'];
		
	
?>

<tr>
	<td><?php echo $id; ?></td>
	<td><?php echo $name; ?></td>
	<td><?php echo $profile; ?></td>
	<td><?php echo $phone; ?></td>
	<td><?php echo $email; ?></td>
	<td><?php echo $video; ?></td>
	<td><?php echo $faq; ?></td>

	<td><input type ="submit" onclick="trueFunction()" id="submit" name= "submit" value="Delete" required></td>

	
	
</tr>



<?php
	}
	
	
	
	//DELETE QUERY
	if ($_POST['submit']) {
	   include_once("config.php");
	   mysqli_query($con, "DELETE FROM `Farmers` WHERE ID = $id");
		
		echo '<script>truefunction()</script>';
		header("Refresh:0");
	}
	
?> 

	
	



</table>

	<br /> 
	</body>
	</html>