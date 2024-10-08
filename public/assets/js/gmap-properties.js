var locations = [
    ['La Perle Immobilière Hammamet',36.405871805912874, 10.591752598793322, 1, 'Sale']
];

var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    center: new google.maps.LatLng(36.405871805912874, 10.591752598793322),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});

var infowindow = new google.maps.InfoWindow();

var marker, i;

var image = 'images/mapicon.png';

for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: image
    });
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
            infowindow.setContent('<div id="mapWindow" style="width:654px;">'+
                '<div class="item">'+
                '<figure><img src="images/items/'+locations[i][3]+'.png" alt="" class="img-responsive">'+
                '<span class="label rent">'+locations[i][4]+'</span></figure>'+
                '<div class="item-data"><div class="item-header clearfix">'+
                '<h3>'+locations[i][0]+'</h3>'+
                '<span class="favorite"><i class="fa fa-heart"></i>9</span>'+
                '<span class="place"><i class="fa fa-map-marker"></i>Hammamet, Tunisia</span></div>'+
                '<div class="item-detail">'+
                '<span class="price">$ 870000</span>'+
                '<div class="left"><span class="bed">3</span><span class="bath">2</span><span class="garage">2</span><span class="gym">1</span></div>'+
                '<div class="right"><span class="area">134 m2</span></div>'+
                '</div></div></div>'+
                '</div>');
            infowindow.open(map, marker);
        }
    })(marker, i));
}
