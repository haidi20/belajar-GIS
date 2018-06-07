<?php
  include "connect.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>belajar GIS</title>
    <style >
      #map {
        height: 400px;
        width: 100%;
        background-color: gray;
      }
    </style>
  </head>
  <body>

    <h2>My Google Maps</h2>

    <div id="map"></div>

    <script>
      var map ;
      function initMap() {
        // var location = {lat:-0.450198,lng:117.171575};
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 2,
          center: new google.maps.LatLng(-0.450198,117.171575),
          mapTypeId:'terrain'
        });

        // Create a <script> tag and set the USGS URL as the source.
        var script = document.createElement('script');

        script.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
        document.getElementsByTagName('head')[0].appendChild(script);
      }

      window.eqfeed_callback = function(results) {
        for(var i = 0; i < results.features.length; i++){
          var coords = results.features[i].geometry.coordinates;
          var latLng = new google.maps.LatLng(coords[1],coords[0]);
          var marker = new google.maps.Marker({
            position: latLng,
            map : map
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzP0NCqUJhmbTCFFr6FX70s2e8otBqQFA&callback=initMap"
  type="text/javascript">
    </script>
  </body>
</html>
