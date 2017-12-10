<?php
		session_start();
		$userId = $_SESSION['id']; 

		
	
		$content= $_POST["comment"];
		
		$rating= $_POST["group-1"];
		$farmerId=$_GET["farmerID"];
		$date=date("l jS \of F Y");
		if ($farmerId==$userId){
			echo "<script type='text/javascript'>alert('You cant rate yourself!!!!');</script>";
		}
		else{


			include 'config.php';
			$sql="INSERT INTO freshLocal_rating (userId,rating,content,uploadDate,farmerId) VALUES('$userId','$rating','$content','$date','$farmerId')";
			if ($result = mysqli_query($con, $sql)) {
				echo "Comment Successfully";
				header('Location:Profile.php?farmerID='.$farmerId);
			   
			}
			else{
				echo mysqli_error($con);
			}
		}
?>