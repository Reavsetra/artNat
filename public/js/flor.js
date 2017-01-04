$(window).load(function () {
    $(".sub-menu").sticky({ topSpacing: 10 });
});

if (window.location.pathname.slice(0,9) == "/arreglos" || window.location.pathname.slice(0,9) == "/floreria" ) {
    $(".light-gallery").fancybox({
        padding: 0,
    }); 
}

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

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-88075525-2', 'auto');
ga('send', 'pageview');
