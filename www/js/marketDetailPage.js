var url=location.search;
var item=document.getElementById("item");
var farmer=document.getElementById("farmer");
var type;

var ulForItem=document.createElement("ul");
ulForItem.id="ulForItem";
item.appendChild(ulForItem);

var ulForFarmer=document.createElement("ul");
ulForFarmer.id="ulForFarmer";
farmer.appendChild(ulForFarmer);
type=getParameterByName("type");


if(type=="" || type!="seafood" && type!="veg" && type!="meat" && type!="restaurant"){
	window.location.assign("marketHome.php");
}

function clearStall(){                    // we can stored the shops id as value in image and then we can search what shops have .
	for(var i=1;i<=10;i++){
		var stall=document.getElementById("stall"+i);
		if(stall!=null)
			stall.src="img/stall.png";
	}
}
function clearRes(){                    // we can stored the shops id as value in image and then we can search what shops have .
	for(var i=1;i<=5;i++){
		var stall=document.getElementById("restaurant"+i);
		if(stall!=null)
			stall.src="img/restaurant.png";
	}
}

if(type=="seafood"){
	var seaFoodArea=document.getElementById("seaFoodArea");
	for(var i=1;i<=5;i++){

		//var stall=document.getElementById("stall"+i);
		var stall=document.createElement("img");
		stall.id="stall"+i;
		stall.src="img/stall.png";
		stall.alt="stall";
		stall.style.position="absolute";
		stall.style.top="30px";
		stall.style.left=(i-1)*141+30+"px";
		seaFoodArea.appendChild(stall);

	}

	for(var i=6;i<=10;i++){
		var stall=document.createElement("img");
		stall.id="stall"+i;
		stall.src="img/stall.png";
		stall.alt="stall";
		stall.style.position="absolute";
		stall.style.bottom="30px";
		stall.style.left=(i-6)*141+30+"px";
		seaFoodArea.appendChild(stall);
	}



	var seaFoodItem=["lobster","shrimp","Salmon","Sea Bass","sturgeon"];  //names can retrive from database.  using ajax to get data from server?
	 for(var i=0;i<5;i++){
	 	var li=document.createElement("li");
	 	var text=document.createTextNode(seaFoodItem[i]);
	 	li.appendChild(text);
	 	li.className="liItem";
	 	ulForItem.appendChild(li);
		li.addEventListener("click",function(){
			filterShop(this,"seafood");
		});

	}
	for(var i=0;i<3;i++){
		var li=document.createElement("li");
		var names=["Sean","Rami","Yanjun"];
		var text=document.createTextNode(names[i]);
		li.appendChild(text);
		li.className="liFarmer";
		li.id=i;
		ulForFarmer.appendChild(li);
		li.addEventListener("click",function(){
			farmerInfo(this);
		});
	}

	seaFoodArea.style.display="initial";
	clearStall();
}

if(type=="veg"){
	var vegArea=document.getElementById("vegArea");
	for(var i=1;i<=3;i++){
		var stall=document.createElement("img");
		stall.id="stall"+i;
		stall.src="img/stall.png";
		stall.alt="stall";
		stall.style.position="absolute";
		stall.style.top="15px";
		stall.style.left=(i-1)*150+30+"px";
		vegArea.appendChild(stall);

	}

	for(var i=4;i<=6;i++){
		var stall=document.createElement("img");
		stall.id="stall"+i;
		stall.src="img/stall.png";
		stall.alt="stall";
		stall.style.position="absolute";
		stall.style.top="200px";
		stall.style.left=(i-4)*150+30+"px";
		vegArea.appendChild(stall);
	}

	for(var i=7;i<=9;i++){
		var stall=document.createElement("img");
		stall.id="stall"+i;
		stall.src="img/stall.png";
		stall.alt="stall";
		stall.style.position="absolute";
		stall.style.bottom="15px";
		stall.style.left=(i-7)*150+30+"px";
		vegArea.appendChild(stall);
	}
	var vegItem=["tomato","carrot","eggplant","cucumber","spinach"];  //names can retrive from database.  using ajax to get data from server?
	 for(var i=0;i<5;i++){
	 	var li=document.createElement("li");
	 	var text=document.createTextNode(vegItem[i]);
	 	li.appendChild(text);
	 	li.className="liItem";
	 	ulForItem.appendChild(li);
		li.addEventListener("click",function(){
			filterShop(this,"veg");
		});
	 }
	for(var i=0;i<3;i++){
		var li=document.createElement("li");
		var names=["Sean","Rami","Yanjun"];
		var text=document.createTextNode(names[i]);
		li.appendChild(text);
		li.className="liFarmer";
		li.id=i;
		ulForFarmer.appendChild(li);
		li.addEventListener("click",function(){
			farmerInfo(this);
		});
	}
	vegArea.style.display="initial";
	clearStall();
}
if(type=="meat"){
	var meatArea=document.getElementById("meatArea");
	for(var i=1;i<=2;i++){
		var stall=document.createElement("img");
		stall.id="stall"+i;
		stall.src="img/stall.png";
		stall.alt="stall";
		stall.style.position="absolute";
		stall.style.top="15px";
		stall.style.left=(i-1)*150+120+"px";
		meatArea.appendChild(stall);
	}

	for(var i=3;i<=4;i++){
		var stall=document.createElement("img");
		stall.id="stall"+i;
		stall.src="img/stall.png";
		stall.alt="stall";
		stall.style.position="absolute";
		stall.style.top="180px";
		stall.style.left=(i-3)*150+120+"px";
		meatArea.appendChild(stall);
	}
	for(var i=5;i<=6;i++){
		var stall=document.createElement("img");
		stall.id="stall"+i;
		stall.src="img/stall.png";
		stall.alt="stall";
		stall.style.position="absolute";
		stall.style.top="350px";
		stall.style.left=(i-5)*150+120+"px";
		meatArea.appendChild(stall);
	}
	var meatItem=["beef","chicken","lamb","pork","duck"];  //names can retrive from database.  using ajax to get data from server?
	 for(var i=0;i<5;i++){
	 	var li=document.createElement("li");
	 	var text=document.createTextNode(meatItem[i]);
	 	li.appendChild(text);
	 	li.className="liItem";
	 	ulForItem.appendChild(li);
		li.addEventListener("click",function(){
			filterShop(this,"meat");
		});
	 }
	for(var i=0;i<3;i++){
		var li=document.createElement("li");
		var names=["Sean","Rami","Yanjun"];
		var text=document.createTextNode(names[i]);
		li.appendChild(text);
		li.id=i;
		li.className="liFarmer"
		ulForFarmer.appendChild(li);
		li.addEventListener("click",function(){
			farmerInfo(this);
		});
	}
	meatArea.style.display="initial";
	clearStall();
}

if(type=="restaurant"){
	var restaurant=document.getElementById("restaurant");
	for(var i=1;i<=5;i++){
		var stall=document.createElement("img");
		stall.id="restaurant"+i;
		stall.src="img/restaurant.png";
		stall.alt="restaurant";
		stall.style.position="absolute";
		stall.style.left=(i-1)*115+20+"px";
		restaurant.appendChild(stall);
	}

	var restaurantItem=["restaurant A","restaurant B","restaurant C","restaurant D","restaurant E"];  //names can retrive from database.  using ajax to get data from server?
	 for(var i=0;i<5;i++){
	 	var li=document.createElement("li");
	 	var text=document.createTextNode(restaurantItem[i]);
	 	li.appendChild(text);
	 	li.className="liItem";
	 	ulForItem.appendChild(li);
		li.addEventListener("click",function(){
			filterShop(this,"restaurant");
		});
	 }
	for(var i=0;i<3;i++){
		var li=document.createElement("li");
		var names=["Sean","Rami","Yanjun"];
		var text=document.createTextNode(names[i]);
		li.appendChild(text);
		li.className="liFarmer";
		li.id=i;
		ulForFarmer.appendChild(li);
		li.addEventListener("click",function(){
			farmerInfo(this);
		});
	}
	restaurant.style.display="initial";
	clearStall();
}

function filterShop(item,foodType){

	item=item.innerHTML;
	clearStall();
	if(foodType=="seafood"){
		for(var i=1;i<=10;i++){
			var stallI=document.getElementById("stall"+i);
			if(item=="lobster" && (i==2 || i==3 || i==9)){
				stallI.src="img/stallcolored.png";
			}
			if(item=="shrimp" && (i==2 || i==5 || i==7)){
				stallI.src="img/stallcolored.png";
			}
		}
	}else if(foodType=="veg"){
		for(var i=1;i<=9;i++){
			var stallI=document.getElementById("stall"+i);
			if(item=="tomato" && (i==2 || i==3 || i==9)){
				stallI.src="img/stallcolored.png";
			}
			if(item=="spinach" && (i==2 || i==5 || i==7)){
				stallI.src="img/stallcolored.png";
			}
		}
	}else if(foodType=="meat"){
		for(var i=1;i<=6;i++){
			var stallI=document.getElementById("stall"+i);
			if(item=="pork" && (i==2 || i==3 || i==6)){
				stallI.src="img/stallcolored.png";
			}
			if(item=="beef" && (i==2 || i==5 || i==1)){
				stallI.src="img/stallcolored.png";
			}
		}
	}else{
		clearRes();
		for(var i=1;i<=5;i++){
			var stallI=document.getElementById("restaurant"+i);
			if(item=="restaurant A" && i==1){
				stallI.src="img/restaurantcolored.png";
				break;
			}
			if(item=="restaurant B" && i==2){
				stallI.src="img/restaurantcolored.png";;
				break;
			}
			if(item=="restaurant C" && i==3){
				stallI.src="img/restaurantcolored.png";
				break;
			}
			if(item=="restaurant D" && i==4){
				stallI.src="img/restaurantcolored.png";
				break;
			}
			if(item=="restaurant E" && i==5){
				stallI.src="img/restaurantcolored.png";
				break;
			}
		}
	}

}

function farmerInfo(name){
	
	url="Profile.php"+"?"+"farmerID="+name.id;
	window.location.assign(url);
}
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

