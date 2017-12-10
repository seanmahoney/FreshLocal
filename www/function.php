<?php
  session_start();
  function get_header(){
  	echo "<div class='header'>";
  	get_logo();
	login_corner();
	echo "</div>";
  }
  function login_corner(){
  	echo "<ul class='secondary_navigation'>";
	echo "<li class='secondary_navigation_item'><a class='secondary_navigation_link' href='#home'>Account</a></li>";
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
	echo "<li class='secondary_navigation_item'><a class='secondary_navigation_link' href='#contact'>Info</a></li>";
	
	echo "</ul>";
  }
  function get_logo(){
  	echo "<a href='index.php'>".
          "<img src='./img/logo.png' class='logo' alt='Flowers in Chania'>".
          "</a>";
  }
?>