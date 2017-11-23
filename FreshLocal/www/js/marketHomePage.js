var rec1=document.getElementById("rec1");
var rec2=document.getElementById("rec2");
var circle=document.getElementById("circle");
var triangle=document.getElementById("triangle");
var weirdShape=document.getElementById("weirdShape");
var canvas=document.getElementById("myCanvas");
var ctx=canvas.getContext("2d");

window.onload=function(){
  ctx.drawImage(rec1,10,10);
  ctx.drawImage(rec2,30,192);
  ctx.drawImage(circle,150,192);
  ctx.drawImage(triangle,450,192);
  ctx.drawImage(weirdShape,330,10);
}




function initMap() {
  var uluru = {lat: 44.64117479999999, lng: -63.566770399999996};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: uluru
  });

/*
    var icon = {
    url: 'https://maps.google.com/mapfiles/kml/shapes/grocery.png',
    scaledSize: new google.maps.Size(30, 30) // 
    //origin: new google.maps.Point(0,0), // 
    //anchor: new google.maps.Point(0, 0) // 
};

  var marker = new google.maps.Marker({
    position: uluru,
    map: map,
    icon:icon
  });
  */
}

function chooseArea(e){
  var x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("myCanvas").offsetLeft;
  var y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("myCanvas").offsetTop;
  var url;
  if(x>10 && x<306 && y>10 && y<160){
    url="marketDetail.php"+"?"+"shape="+"rec1";
    window.location.assign(url);
  }

  if(x>30 && x<122 && y>195 && y<350){
    url="marketDetail.php"+"?"+"shape="+"rec2";
    window.location.assign(url);
  }

  if(x>157 && x<395 && y>200 && y<342){
    url="marketDetail.php"+"?"+"shape="+"circle";
    window.location.assign(url);
  }

  if(x>341 && x<693 && y>18 && y<164){
    url="marketDetail.php"+"?"+"shape="+"weirdShape";
    window.location.assign(url);
  }

  if(x>454 && x<660 && y>197 && y<347){
    url="marketDetail.php"+"?"+"shape="+"triangle";
    window.location.assign(url);
  }

}
