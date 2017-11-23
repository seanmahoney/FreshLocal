<!DOCTYPE html>
<html>
<head>
	<title>Scotia Farmer Market</title>
	<link rel="stylesheet" type="text/css" href="css/marketHomePage.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">

</head>
<body>
<?php
include 'function.php';
get_header();
?> 
	<section id="marketInfo">
		<div>
			<h4>Scotia Farmer Market</h4>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
			<label>Time of Open</label><br>
			<p>
				<ul>
					<li>Monday     xxxx-xxxx</li>
					<li>Tuesday    xxxx-xxxx</li>
					<li>Wednesday  xxxx-xxxx</li>
					<li>Thursday   xxxx-xxxx</li>
					<li>Friday     xxxx-xxxx</li>
					<li>Saturday   xxxx-xxxx</li>
					<li>Sunday     xxxx-xxxx</li>
				</ul>
			</p>
			<label>Address</label>
			<div id="map"></div>
			<label>Contact</label><br>
			<label>902-xxx-xxxx</label>
		</div>
	</section>
	<section id="marketLayout">
		<canvas id="myCanvas" width="700px" height="400px" onclick="chooseArea()">
		</canvas>
		<img src="img/rec1.png" alt="rectangle" class="shape" id="rec1" >
		<img src="img/rec2.png" alt="rectangle" class="shape" id="rec2" >
		<img src="img/circle.png" alt="circle" class="shape" id="circle" >
		<img src="img/triangle.png" alt="triangle" class="shape" id="triangle" >
		<img src="img/weirdShape.png" alt="weirdShape" class="shape" id="weirdShape" >
	</section>
	<script type="text/javascript" src="js/marketHomePage.js"></script>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWpmbfEK8UxIQXHP7_f8mseRJijUEfWz4&callback=initMap">
    </script>

</body>
</html>