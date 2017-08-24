;
function initMap() {
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 17,
        center: {lat: 53.9132898, lng: 27.5811282},
        disableDefaultUI:true,
        scrollwheel: false,
        zoomControl: true,
        scaleControl: false
    });

    var marker = new google.maps.Marker({
        map: map,
        position: {lat: 53.9132898, lng: 27.5811282}
    });
}