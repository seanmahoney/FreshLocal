<?php
	$id=$_GET['id'];
	include ("config.php");
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
	$sql="SELECT userName, password, email FROM freshLocal_users WHERE userId='$id'";
	$query = mysqli_query($con, $sql);
	if($query){
		$row = mysqli_fetch_row($query);
		$name=$row[0];
		$email=$row[2];
		$password=$row[1];
	}

?>
<html>
<head>
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Update System</title>
	<link rel="stylesheet" type="text/css" href="css/userLogin.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
include 'function.php';
get_header();
?> 
	<center>
		<div id="login-form">
			<h2>Update Information</h2>
			<form method="POST" action="updateInfo.php" id="login">
				<table align="center" width="100%" border="0">
					<tr>
						<td><input type="text" name="username" placeholder="User Name" class="field" value="<?php echo $name ?>" required /></td>
					</tr>
					<tr>
						<td><input type="text" name="email" placeholder="Your Email" class="field"  value="<?php echo $email ?>" required /></td>
					</tr>
					<tr>
						<td><input type="text" name="password" placeholder="Your Password" class="field"  value="<?php echo $password ?>" required /></td>
					</tr> 
					<tr> 
						<td><input type="submit" name="signup" id="submit" value ="Update"/></td>
					</tr>
					<input type="hidden" name="value" value="user">
					<input type="hidden" name="id" value="<?php echo $id ?>" >
				</table>
			</form>
		</div>
	</center>

</body>
</html>
