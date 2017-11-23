<?php
	
	function login() {

		include ("config.php");
		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}
		$ratingId=mysqli_real_escape_string($con, $_POST["ratingId"]);
		$userId=mysqli_real_escape_string($con, $_POST["userId"]);
		$rating=mysqli_real_escape_string($con, $_POST["rating"]);
		$content=mysqli_real_escape_string($con, $_POST["content"]);
		$date=mysqli_real_escape_string($con, $_POST["date"]);
		$farmerId=mysqli_real_escape_string($con, $_POST["farmerId"]);
		echo $ratingId+" ratingId";
		$sql="INSERT INTO freshLocal_rating (ratingId,userId,rating,content,date,farmerId) VALUES('$ratingId','$userId','$rating','$content','$date','$farmerId')";
		echo $sql;
		if ($result = mysqli_query($con, $sql)) {
			if ($result->num_rows == 0){
				echo "Wrong User name or password";
			}
			else{
				$row = $result->fetch_object();
				echo "Welcome ".$row->firstName;
			}
			
		   
		}
		else{
			echo mysqli_error($con);
		}
		echo "function completed";
	}	
	login();
?>