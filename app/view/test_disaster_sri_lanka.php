
<!DOCTYPE html>
<html>
<head>
    <style>
        html, body, #map {
            margin: 0;
            padding: 0;
            height: 100%;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        var map;

        function initialize() {
            var mapOptions = {
                zoom: 8,
                center: {lat: 7.9500, lng: 81.0000},
                mapTypeId: google.maps.MapTypeId.SATELLITE
            };
            map = new google.maps.Map(document.getElementById('map'),
                mapOptions);


            var script = document.createElement('script');


            script.src = 'http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_week.geojsonp';

            document.getElementsByTagName('head')[0].appendChild(script);


            //Info window to show details on click on the map
            var infowindow = new google.maps.InfoWindow({
                content:"Hello World!"
            });

            //Get style circle
            var style = function(feature) {
                var magnitude = feature.getProperty('mag');
                return {
                    icon: getCircle(magnitude)
                };
            };

            map.data.setStyle(style);
        }

        function getCircle(magnitude) {
            var circle = {
                path: google.maps.SymbolPath.CIRCLE,
                fillColor: 'red',
                fillOpacity: .2,
                scale: Math.pow(2, magnitude) / 2,
                strokeColor: 'white',
                strokeWeight: .5
            };
            return circle;
        }

        function eqfeed_callback(results) {
            map.data.addGeoJson(results);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
</head>
<body>
<div id="map"></div>
</body>
</html>