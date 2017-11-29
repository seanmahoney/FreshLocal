<?php
session_start();
$username = $_SESSION['username']; 

?>

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
		<div id="marketMap">
			<div id="seaFood">
				<img src="img/rec1.png" alt="sea food" id="seaFoodI" class="image">
			</div>
			<div id="veg">
				<img src="img/rec2.png" alt="veg" id="vegI" class="image">
			</div>
			<div id="meat">
				<img src="img/rec3.png" alt="meat" id="meatI" class="image">
			</div>
			<div id="freshFood">
				<img src="img/rec4.png" alt="fresh food" id="freshFoodI" class="image">
			</div>
		</div>
	</section>
	<script type="text/javascript" src="js/marketHomePage.js"></script>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWpmbfEK8UxIQXHP7_f8mseRJijUEfWz4&callback=initMap">
    </script>

</body>
</html>