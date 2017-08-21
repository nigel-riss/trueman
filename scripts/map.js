;
function initMap() {
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 17,
        center: {lat: 51.5323769, lng: 46.0285},
        disableDefaultUI:true,
        scrollwheel: false,
        zoomControl: true,
        scaleControl: false
    });

    var marker = new google.maps.Marker({
        map: map,
        position: {lat: 51.5323769, lng: 46.0285}
    });
}