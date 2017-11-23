var url=location.search;
var item=document.getElementById("item");
var farmer=document.getElementById("farmer");
var shape;

var ulForItem=document.createElement("ul");
ulForItem.id="ulForItem";
item.appendChild(ulForItem);

var ulForFarmer=document.createElement("ul");
ulForFarmer.id="ulForFarmer";
farmer.appendChild(ulForFarmer);
//window.onload=function(){
	shape=getParameterByName("shape");
	var img= document.getElementById("shape");
	img.src="img/"+shape+".png";
	img.alt=shape;
	img.style.width="600px";
	img.style.height="400px";



	for(var i=0;i<10;i++){
		var li=document.createElement("li");
		var text=document.createTextNode(shape+i);
		li.appendChild(text);
		li.className="liItem";
		ulForItem.appendChild(li);
		li.addEventListener("click",filterShop(li.innerHTML));

	}


	for(var i=0;i<10;i++){
		var li=document.createElement("li");
		var text=document.createTextNode("farmer"+i);
		li.appendChild(text);
		li.className="liFarmer"
		ulForFarmer.appendChild(li);
		li.addEventListener("click",farmerInfo(li.innerHTML));
	}


//}

function filterShop(item){
	return function(){
		alert("Choose shops have this item: "+item);
	}
}

function farmerInfo(name){
	return function(){
		alert("Show farmer :" +name+" info");
		url="Profile.php"+"?"+"farmerID="+name;
		window.location.assign(url);
	}
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

