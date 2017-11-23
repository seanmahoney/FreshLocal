function initMap() {
    var position = { lat: 44.638578, lng: -63.575649 };
    var market1 = { lat: 44.640714, lng: -63.566272 };
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('google_map'), {
        center: position,
        zoom: 13
    });

    var icon = {
    url: 'https://maps.google.com/mapfiles/kml/shapes/grocery.png',
    scaledSize: new google.maps.Size(40, 40) 
};

    var marker = new google.maps.Marker({
        position: market1,
        map: map,
        zoom: 5,
        icon: icon,
        title: 'Seaport Farmer\'s Market'
    });

    marker.addListener('click', function() {
        window.location.replace("marketHome.php");
    });
}