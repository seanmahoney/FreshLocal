<?php

	function updateFarmer(){
		include ("config.php");
		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}
		$id=$_POST["id"];
		$username=$_POST["username"];
		$phonenumber=$_POST["phonenumber"];
		$email=$_POST["email"];
		$video=$_POST["video"];
		$password=$_POST["password"];
		$FAQ=$_POST["FAQ"];
		$profile=$_POST["profile"];
		$sql="UPDATE Farmers SET Name='$username', Profile='$profile', PhoneNumber='$phonenumber', Email='$email', Video_link='$video', FAQ='$FAQ', password='$password' WHERE ID='$id' ";
		if ($con->query($sql)==true) {
			echo "Change successfully";
			header( "refresh:5; url=marketHome.php" ); 
		}

	}
	function updateUser(){
		include ("config.php");
		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}
		$id=$_POST["id"];
		$username=$_POST["username"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$sql="UPDATE freshLocal_users SET userName='$username',password='$password', email='$email' WHERE userId='$id' ";
		if ($con->query($sql)==true) {
			echo "Change successfully";
			header( "refresh:5; url=marketHome.php" ); 
		}

	}
	$value=$_POST["value"];
	if($value=="farmer"){
		updateFarmer();
	}
	if($value=="user"){
		updateUser();
	}
?>