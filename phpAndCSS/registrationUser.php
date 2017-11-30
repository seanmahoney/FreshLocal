
<html>
<head>
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Registration System</title>
	<link rel="stylesheet" type="text/css" href="css/userLogin.css">

</head>
<body>
	<center>
		<div id="login-form">
			<h2>Registration</h2>
			<form method="POST" action="registrationCheck.php" id="login">
				<table align="center" width="100%" border="0">
					<tr>
						<td><input type="text" name="username" placeholder="User Name" class="field" required /></td>
					</tr>
					<tr>
						<td><input type="text" name="email" placeholder="Your Email" class="field" required /></td>
					</tr>
					<tr>
						<td><input type="password" name="password" placeholder="Your Password" class="field" required /></td>
					</tr> 
					<tr> 
						<td><input type="submit" name="signup" id="submit"  value ="Sign Me Up"/></td>
					</tr>
					<tr>
						<td><a href="login.php" id= "link">Sign In Here</a></td>
					</tr>
					<input type="hidden" name="value" value="user">
				</table>
			</form>
		</div>
	</center>
	<script type="text/javascript" src="js/registration.js"></script>
</body>
</html>
