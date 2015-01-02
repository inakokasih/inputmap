<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
    <head>
        <meta http-equiv = "content-type" content = "text/html; charset=UTF-8" />
        <style type = "text/css">
            #map img {
                max-width: none;
            }
            #map label {
                width: auto; display:inline;
            }
        </style>
    </head>
    <body>
        <div id="map" style="width: 650px; height: 300px;"></div>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script>
            var directionsDisplay;
            var directionsService = new google.maps.DirectionsService();
            var map;

            function initialize() {
                directionsDisplay = new google.maps.DirectionsRenderer();
                var surakarta = new google.maps.LatLng(-7.5561, 110.8317);
                var mapOptions = {
                    zoom: 12,
                    center: surakarta
                };
                map = new google.maps.Map(document.getElementById('map'), mapOptions);
                directionsDisplay.setMap(map);
            }
            var pos;
            function calcRoute() {

                navigator.geolocation.getCurrentPosition(function(position) {
                    var start = new google.maps.LatLng(position.coords.latitude,
                            position.coords.longitude);

                    var geocoder = new google.maps.Geocoder();
                    geocoder.geocode({'latLng': start}, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (results[1]) {

                                var end = document.getElementById('end').value;
//                                alert(end);
//                                alert(results[1].formatted_address);
                                var request = {
                                    origin: results[1].formatted_address,
                                    destination: end,
                                    travelMode: google.maps.TravelMode.DRIVING
                                };
                                directionsService.route(request, function(response, status) {
//                                    alert(status);
                                    if (status == google.maps.DirectionsStatus.OK) {
                                        directionsDisplay.setDirections(response);
                                    }
                                });

                            } else {
                                alert('No results found');
                            }
                        } else {
                            alert('Geocoder failed due to: ' + status);
                        }
                    });


                });
                return;
            }
            google.maps.event.addDomListener(window, 'load', initialize);

        </script>
        <div id="panel">
            <b>SPBU tujuan: </b>
            <select id="end" onchange="calcRoute();">
                <option value="SPBU Pertamina Pasti Pas (SPBU 44.571.21), Surakarta">SPBU Gondang Manahan</option>
                <option value="Pertamina Spbu 4457117, Jalan Kapten Mulyadi, Surakarta, Central Java">SPBU Pasar Kliwon</option>
                <option value="Pertamina Spbu Semanggi, Pasar Kliwon, Surakarta, Jawa Tengah">SPBU Semanggi</option>
            </select>
        </div>
        <div id="map-canvas"></div>
    </body>
</HTML>