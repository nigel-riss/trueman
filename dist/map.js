;
function initMap() {
    var mapZoom = 13;
    if (document.body.clientWidth > 1000) {
        mapZoom = 14;
    }

    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: mapZoom,
        // center: {lat: 53.9132898, lng: 27.5811282},
        center: {lat: 53.91157521592535, lng: 27.56732355677787},
        disableDefaultUI:true,
        scrollwheel: false,
        zoomControl: true,
        scaleControl: false
    });

    var marker = new google.maps.Marker({
        map: map,
        position: {lat: 53.9132898, lng: 27.5811282},
        icon: 'favicon-32x32.png'
    });

    var marker2 = new google.maps.Marker({
        map: map,
        position: {lat: 53.90767807065405, lng: 27.549721499999972},
        icon: 'favicon-32x32.png'
    });
}
