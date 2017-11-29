var cbUser=document.getElementById("cbUser");
var cbFarmer=document.getElementById("cbFarmer");
cbUser.addEventListener("click",function(){
	if(cbFarmer.checked==true){
		cbFarmer.checked=false;
	}
});
cbFarmer.addEventListener("click",function(){
	if(cbUser.checked==true){
		cbUser.checked=false;
	}
});
