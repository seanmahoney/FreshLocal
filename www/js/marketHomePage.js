var seaFood=document.getElementById("seaFoodI");
var veg=document.getElementById("vegI");
var meat=document.getElementById("meatI");
var freshFood=document.getElementById("freshFoodI");


seaFood.addEventListener("mouseover",function(){
  seaFood.src="img/rec1colored.png";
});
seaFood.addEventListener("click",function(){
  window.location.assign("marketDetail.php?type=seafood");
});
seaFood.addEventListener("mouseleave",function(){
  seaFood.src="img/rec1.png";
});

veg.addEventListener("mouseover",function(){
  veg.src="img/rec2colored.png";
});
veg.addEventListener("click",function(){
  window.location.assign("marketDetail.php?type=veg");
});
veg.addEventListener("mouseleave",function(){
  veg.src="img/rec2.png";
});
meat.addEventListener("mouseover",function(){
  meat.src="img/rec3colored.png";
});
meat.addEventListener("click",function(){
  window.location.assign("marketDetail.php?type=meat");
});
meat.addEventListener("mouseleave",function(){
  meat.src="img/rec3.png";
});
freshFood.addEventListener("mouseover",function(){
  freshFood.src="img/rec4colored.png";
});
freshFood.addEventListener("click",function(){
  window.location.assign("marketDetail.php?type=restaurant");
});
freshFood.addEventListener("mouseleave",function(){
  freshFood.src="img/rec4.png";
});






function initMap() {
  var uluru = {lat: 44.64117479999999, lng: -63.566770399999996};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: uluru
  });
}

