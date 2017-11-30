for(var i=1;i<=3;i++){
	var stall=document.getElementById("stall"+i);
	stall.style.position="absolute";
	stall.style.top="15px";
	stall.style.left=(i-1)*150+30+"px";

}

for(var i=4;i<=6;i++){
	var stall=document.getElementById("stall"+i);
	stall.style.position="absolute";
	stall.style.top="200px";
	stall.style.left=(i-4)*150+30+"px";
}

for(var i=7;i<=9;i++){
	var stall=document.getElementById("stall"+i);
	stall.style.position="absolute";
	stall.style.bottom="15px";
	stall.style.left=(i-7)*150+30+"px";
}

function clearStall(){
	for(var i=1;i<=10;i++){
		var stall=document.getElementById("stall"+i);
		stall.src="img/stall.png";
	}
}


var shrimp=document.getElementById("shrimp");              
shrimp.addEventListener("click",function(){
	clearStall();
	var stall2=document.getElementById("stall2");
	var stall3=document.getElementById("stall3");
	var stall9=document.getElementById("stall9");
	stall2.src="img/stallcolored.png";
	stall3.src="img/stallcolored.png";
	stall9.src="img/stallcolored.png";
});

var lobster=document.getElementById("lobster");
lobster.addEventListener("click",function(){
	clearStall();
	var stall1=document.getElementById("stall1");
	var stall6=document.getElementById("stall6");
	var stall7=document.getElementById("stall7");
	stall1.src="img/stallcolored.png";
	stall6.src="img/stallcolored.png";
	stall7.src="img/stallcolored.png";
});

