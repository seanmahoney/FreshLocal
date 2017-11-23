<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>FreshLocal</title>
		<meta name="description" content="Profile page for FreshLocal">
		<!--<script src="a3.js"></script> -->
		<link rel="stylesheet" href ="css/profile.css"/>
		<link rel="stylesheet" href="css/normalize.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		
			<!--[if lt IE 9]>
		  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->
	</head>
	<body>
		<?php
		include 'function.php';
		get_header();
		?> 
		<div id="wrapper">
			<div id="mainArea">
				<div id="farmerProfile">
					<div id="farmerName"></div>
					<h3>Profile</h3>
					<div id="farmerMessage"></div>
				</div>	
				<div id="userComments">
					<h3>User Comments</h3>
					<div id="commentText"></div>
				</div>
				<div id="FAQbox">
					<h3>Frequently Asked Questions: </h3>
					<div id="FAQs"></div>
					<input type="button" name="rateFarmer" value="Rate Me" onclick="rateMe()">				
				</div>	
				<div id="videoSection">
					<h3>Our Video!</h3>
				<iframe width="300" height="200" id="video" src="">	</iframe>
				</div>
			</div>		
		</div>
		<script type="text/javascript" src="js/Profile.js"></script>
	</body>
</html>