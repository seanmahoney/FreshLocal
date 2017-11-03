<?php
  function get_header(){
  	echo "<div class='header'>";
  	get_logo();
  	
    echo "<ul class='main_navigation'>";
	echo "<li class='main_navigation_item'><a class='main_navigation_link active' href='index.php'>Home</a></li>";
	echo "<li class='main_navigation_item'><a class='main_navigation_link' href='#news'>Product</a></li>";
	echo "<li class='main_navigation_item'><a class='main_navigation_link' href='#contact'>Map</a></li>";
	echo "<li class='main_navigation_item'><a class='main_navigation_link' href='#about'>Contact</a></li>";
	echo "</ul>";
	login_corner();
	echo "</div>";
  }
  function login_corner(){
  	echo "<ul class='secondary_navigation'>";
	echo "<li class='secondary_navigation_item'><a class='secondary_navigation_link' href='#home'>Account</a></li>";
	echo "<li class='secondary_navigation_item'><a class='secondary_navigation_link' href='#news'>Login</a></li>";
	echo "<li class='secondary_navigation_item'><a class='secondary_navigation_link' href='#contact'>Info</a></li>";
	
	echo "</ul>";
  }
  function get_logo(){
  	echo "<img src='./img/logo.png' class='logo' alt='Flowers in Chania'>";
  }
?>