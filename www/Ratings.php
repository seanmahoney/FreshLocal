
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>FreshLocal</title>
		<meta name="description" content="Ratings page for FreshLocal">
		<link rel="stylesheet" href ="css/Ratings.css"/>
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
		$farmerID=$_GET["farmerID"];
		if ($_SESSION['login-status']){
		    
		}
		else{
		    echo "<script>alert ('You should Log in to rate a farmer.');</script>";
		    header('Location:login.php');
		}
				
		?> 
		<div id="wrapper">
			<div id="mainArea">
				
				
				
				<form method="post" action="<?php echo 'commentSubmit.php?farmerID='.$farmerID; ?>">
					<h2>Rate</h2>
					<div id="farmerName" name="farmerName"></div>
					<div id="textBox">
						<textarea id = "text" placeholder="Comments" name="comment"></textarea>
					</div>				 
					<h3>Rating</h3>
					<div id="stars">
	    				<input type="radio" name="group-1" id="group-1-0" value="5" /><label for="group-1-0"></label>
	    				<input type="radio" name="group-1" id="group-1-1" value="4" /><label for="group-1-1"></label>
	    				<input type="radio" name="group-1" id="group-1-2" value="3" /><label for="group-1-2"></label>
	    				<input type="radio" name="group-1" id="group-1-3" value="2" /><label for="group-1-3"></label>
	    				<input type="radio" name="group-1" id="group-1-4"  value="1" /><label for="group-1-4"></label>
    				</div>
    				<input type= "submit" id="submit" value= "Submit"/>
    			</form>
			
				<br>
				<br>
				<br>
			</div>	
		</div>
		<script type="text/javascript" src="js/Ratings.js"></script>
	</body>
	</html>

	
   

 <!--
        <input disabled="disabled" type="radio" checked="checked" name="group-3" id="group-3-1" value="4" /><label for="group-3-1"></label>
       