<?php

	function register() {

		include ("config.php");
		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}
		$value=$_POST['value'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		//echo "bbbb"."$value"."aaaa";
		if($value=="" || $value!="farmer" && $value!="user")
		{
			echo "Log in first";
			header( "refresh:5; url=login.php" ); 
			exit();
		}
		if($value=="farmer"){
			$video=$_POST['video'];
			$phonenumber=$_POST['phonenumber'];
			$FAQ=$_POST['FAQ'];
			$profile=$_POST['profile'];
		}

		include_once("config.php");
		if($value=="farmer")
			$sql = "INSERT INTO Farmers (Name, Profile, PhoneNumber,Email,Video_link,FAQ,password) VALUES ('$username', '$profile','$phonenumber','$email', '$video','$FAQ','$password')";   //error check?
		else
			$sql = "INSERT INTO freshLocal_users (userName, password, email) VALUES ('$username', '$password', '$email')";
		//echo $sql;

		if ($con->query($sql)==true) {
			echo "Register successfully";
			header( "refresh:5; url=login.php" ); 
		}
		else{

			//echo mysqli_error($con);
			echo "Duplicate username, change your name!";
			if($value=="farmer")
				header( "refresh:5; url=registrationFarmer.php?value=farmer" );
			else
				header( "refresh:5; url=registrationUser.php?value=user" );
		}
		//echo "function completed";
	}	
	register();

?>
