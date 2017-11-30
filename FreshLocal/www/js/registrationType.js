var userImg=document.getElementById("userImg");
var farmerImg=document.getElementById("farmerImg");

userImg.addEventListener("click",function(){
	window.location.assign("registrationUser.php?value=user");
});

farmerImg.addEventListener("click",function(){
	window.location.assign("registrationFarmer.php?value=farmer");
});