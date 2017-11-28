var seaFood=document.getElementById("seaFoodI");
var veg=document.getElementById("vegI");
var meat=document.getElementById("meatI");
var freshFood=document.getElementById("freshFoodI");


seaFood.addEventListener("mouseover",function(){
	seaFood.src="img/rec1colored.png";
});
seaFood.addEventListener("mouseleave",function(){
	seaFood.src="img/rec1.png";
});

veg.addEventListener("mouseover",function(){
	veg.src="img/rec2colored.png";
});
veg.addEventListener("mouseleave",function(){
	veg.src="img/rec2.png";
});
meat.addEventListener("mouseover",function(){
	meat.src="img/rec3colored.png";
});
meat.addEventListener("mouseleave",function(){
	meat.src="img/rec3.png";
});
freshFood.addEventListener("mouseover",function(){
	freshFood.src="img/rec4colored.png";
});
freshFood.addEventListener("mouseleave",function(){
	freshFood.src="img/rec4.png";
});

