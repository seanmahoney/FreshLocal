
<html>
<head>
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Registration System</title>


</head>
<body>
	<center>
		<div id="login-form">
			<h2>Registration</h2>
			<form method="POST" action="registrationCheck.php">
				<table align="center" width="30%" border="0">
					<tr>
						<td><input type="text" name="username" placeholder="User Name" required /></td>
					</tr>
					<tr>
						<td><input type="text" name="phonenumber" id="phonenumber" placeholder="Phone Number"></td>
					</tr>
					<tr>
						<td><input type="text" name="email" placeholder="Your Email" required /></td>
					</tr>
					<tr>
						<td><input type="password" name="password" placeholder="Your Password" required /></td>
					</tr>
					<tr>
						<td><input type="url" name="video" id="video" placeholder="Video Link" required/></td>
					</tr>
					<tr>
						<td><textarea rows="5" cols="50" name="FAQ" id="FAQ" placeholder="FAQ"></textarea></td>
					</tr>   
					<tr>
						<td><textarea rows="4" cols="50" name="profile" id="profile" placeholder="Profile" placeholder="FAQ"></textarea></td>
					</tr>
					<tr> 
						<td><input type="submit" name="signup" value ="Sign Me Up"/></td>
					</tr>
					<tr>
						<td><a href="login.php">Sign In Here</a></td>
					</tr>
					<input type="hidden" name="value" value="farmer">
				</table>
			</form>
		</div>
	</center>
	<script type="text/javascript" src="js/registration.js"></script>
</body>
</html>
