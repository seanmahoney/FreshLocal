<?php
  session_start();
  function get_header(){
  	echo "<div class='header'>";
  	get_logo();
	login_corner();
	echo "</div>";
  }
  function login_corner(){

    $account="<a class='secondary_navigation_link' href='login.php'>Account</a>";
    $id=$_SESSION['id'];
    $type=$_SESSION['type'];

    //echo "'$id'";
    echo "<ul class='secondary_navigation'>";
    if($_SESSION['login-status']==true){
       include_once("config.php");
       if($type=="user"){
         $sql="SELECT userName FROM freshLocal_users where userId=$id";
       }
       if($type=="farmer"){
         $sql="SELECT Name FROM Farmers where ID=$id";
       }
       $query=mysqli_query($con,$sql);
       //echo "<script>console.log( 'Debug Objects: " . "hhaha" . "' );</script>";
       if($query){
         $row = mysqli_fetch_row($query);
         $dbUsername=$row[0];
       }
       //echo "<script>console.log( 'Debug Objects: " . $con . "' );</script>";
       if($type=="farmer")
        $account="<a class='secondary_navigation_link' href='updateFarmer.php?id=$id'>$dbUsername</a>";
       if($type=="user")
        $account="<a class='secondary_navigation_link' href='updateUser.php?id=$id'>$dbUsername</a>";
       echo "<li class='secondary_navigation_item'>$account</li>";
    }
    //echo "<ul class='secondary_navigation'>";
    if($_SESSION['login-status']==false)
  	 echo "<li class='secondary_navigation_item'>$account</li>";
  	echo "<li class='secondary_navigation_item'><a class='secondary_navigation_link' href='";
    if ($_SESSION['login-status']){
      echo "logout.php";
    }
    else{
      echo "login.php";
    }
    echo "'>";
    
    if ($_SESSION['login-status']){
      echo "logout";
    }
    else{
      echo "login";
    }
    echo "</a></li>";
    echo "<li class='secondary_navigation_item'><a class='secondary_navigation_link' href='team.php'>Team Info</a></li>";
    
    echo "</ul>";
  }
  function get_logo(){
  	echo "<a href='index.php'>".
          "<img src='./img/logo.png' class='logo' alt='Flowers in Chania'>".
          "</a>";
  }
?>