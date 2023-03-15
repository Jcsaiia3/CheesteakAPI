<?php

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Google Maps API Example</title>
    <style>
        #map {
            height: 100%;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
      *//Key has been removed
    <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script>
        function initMap() {
            var mapOptions = {
                center: {lat: 37.7749, lng: -122.4194},
                zoom: 8
            };
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        }
    </script>
</head>
<body onload="initMap()">
    <div id="map"></div>
</body>
</html>

?>
