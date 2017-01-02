$(window).load(function () {
    $(".sub-menu").sticky({ topSpacing: 10 });
});

if(window.location.pathname != "/"){
    $(".light-gallery").fancybox({
        padding : 0,
    });
};

$(document).foundation();

function initMap() {
    var myLatLng = {
        lat: 19.372773,
        lng: -99.277800
    };

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: {
            lat: 19.372973,
            lng: -99.277800
        }
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
    });
};