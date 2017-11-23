<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>FreshLocal</title>
		<meta name="description" content="Update page for FreshLocal">
		<link rel="stylesheet" href ="css/update.css"/>
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
				<div id="headline">
					<h3>Profile Headline</h3>
					<input type="text" id="headlineText" placeholder="Enter your headline" /> 
				</div>	
				<div id="videoSection">
					<h3>Embeded Youtube Video</h3>
					<textarea id="video" placeholder="Copy and paste your youtube link"></textarea>
				</div>	
				<div id="contentSection">
					<h3>Content</h3>
						<textarea id="content" placeholder="Enter any informaton that you would like your viewers to know!"></textarea>
				</div>
				<div id=submitSection>	
					<input type= "submit" id="submit" value= "Submit" onClick ="" />
				</div>	
			</div>	
		</div>
	</body>
	</html>