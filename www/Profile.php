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
		include 'config.php';
		get_header();
		$farmerID=$_GET["farmerID"];
		$name;
		$profile;
		$video;
		$FAQ;
		$sql="SELECT * FROM Farmers WHERE ID='$farmerID'";
		if ($result = mysqli_query($con, $sql)) {
			if ($result->num_rows == 0){
				echo "This farmer is not working!";
			}
			else{
				$row = $result->fetch_object();
				$name = $row->Name;
				$profile = $row->Profile;
				$video = $row->Video_link;
				$FAQ = $row->FAQ;
			}
		}
		$rating;
		$comment;
		$i=0;
		$sql="SELECT * FROM freshLocal_rating WHERE farmerId='$farmerID'";
		if ($result = mysqli_query($con, $sql)) {
			if ($result->num_rows == 0){
				$comment[$i]="His customers are lazy";
			}
			else{
				while ($row = $result->fetch_object()){
					$rating[$i]=$row->rating;
					$comment[$i]=$row->content;
					$i=$i+1;
				}
			}
		}
		?> 
		<div id="wrapper">
			<div id="mainArea">
				<div id="farmerProfile">
					<div id="farmerName">
						<?php
							echo $name;
						?>
					</div>
					<h3>Profile</h3>
					<div id="farmerMessage">
						<?php
							echo $profile;
						?>
					</div>
				</div>	
				<div id="userComments">
					<h3>User Comments</h3>
					<div id="commentText">

						<?php 
							for ($i = 0; $i <= count($comment)-1; $i++) {
							    echo "Comment:".$comment[$i];
						  		echo "      Rating:".$rating[$i]."<br>";
							}	
						?>
					</div>
				</div>
				<div id="FAQbox">
					<h3>Frequently Asked Questions: </h3>
					<div id="FAQs">
						<?php
							echo $FAQ;
						?>
					</div>
					<input type="button" name="rateFarmer" value="Rate Me" onclick="rateMe()">				
				</div>	
				<div id="videoSection">
					<h3>Our Video!</h3>
				<video width="400" controls>
				  <source src=<?php echo "'".$video."'"; ?> type="video/mp4">
				 
				  Your browser does not support HTML5 video.
				</video>


				</div>
			</div>		
		</div>
		<script type="text/javascript" src="js/Profile.js"></script>
	</body>
</html>