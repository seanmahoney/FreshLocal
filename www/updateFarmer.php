<?php
	$id=$_GET['id'];
	include ("config.php");
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
	$sql="SELECT Name, Profile, PhoneNumber, Email, Video_link, FAQ, password FROM Farmers WHERE ID='$id'";
	$query = mysqli_query($con, $sql);
	if($query){
		$row = mysqli_fetch_row($query);
		$name=$row[0];
		$profile=$row[1];
		$phonenumber=$row[2];
		$email=$row[3];
		$video=$row[4];
		$FAQ=$row[5];
		$password=$row[6];
	}

?>
<html>
<head>
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Update System</title>
	<link rel="stylesheet" type="text/css" href="css/farmerLogin.css">
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
						<td><input type="text" name="phonenumber" id="phonenumber" class="field" value="<?php echo $phonenumber ?>"  placeholder="Phone Number"></td>
					</tr>
					<tr>
						<td><input type="text" name="email" placeholder="Your Email" class="field" value="<?php echo $email ?>" required /></td>
					</tr>
					<tr>
						<td><input type="text" name="password" placeholder="Your Password" class="field" value="<?php echo $password ?>" required /></td>
					</tr>
					<tr>
						<td><input type="url" name="video" id="video" placeholder="Video Link" class="field" value="<?php echo $video ?>" required/></td>
					</tr>
					<tr>
						<td><textarea rows="5" cols="50" name="FAQ" id="FAQ" placeholder="FAQ" value="" class="field"><?php echo $FAQ ?></textarea></td>
					</tr>   
					<tr>
						<td><textarea rows="4" cols="50" name="profile" id="profile" placeholder="Profile" value=""  class="field"><?php  echo $profile ?></textarea></td>
					</tr>
					<tr> 
						<td><input type="submit" name="signup" id="submit" value ="Update"/></td>
					</tr>

					<input type="hidden" name="value" value="farmer">
					<input type="hidden" name="id" value="<?php echo $id?>"> 
				</table>
			</form>
		</div>
	</center>

</body>
</html>
