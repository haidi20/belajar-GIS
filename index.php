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
      function initMap(){
        var locat = {lat: -28.024, lng: 140.887};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 3,
          center: locat
        });

        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        var makers = locations.map(function(location , i) {
          return new google.maps.Marker({
            position : location,
            label : labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

        var locations = [
          {lat: -31.563910, lng: 147.154312},
          {lat: -33.718234, lng: 150.363181},
          {lat: -33.727111, lng: 150.371124},
          {lat: -33.848588, lng: 151.209834},
          {lat: -33.851702, lng: 151.216968},
          {lat: -34.671264, lng: 150.863657},
          {lat: -35.304724, lng: 148.662905},
          {lat: -36.817685, lng: 175.699196},
          {lat: -36.828611, lng: 175.790222},
          {lat: -37.750000, lng: 145.116667},
          {lat: -37.759859, lng: 145.128708},
          {lat: -37.765015, lng: 145.133858},
          {lat: -37.770104, lng: 145.143299},
          {lat: -37.773700, lng: 145.145187},
          {lat: -37.774785, lng: 145.137978},
          {lat: -37.819616, lng: 144.968119},
          {lat: -38.330766, lng: 144.695692},
          {lat: -39.927193, lng: 175.053218},
          {lat: -41.330162, lng: 174.865694},
          {lat: -42.734358, lng: 147.439506},
          {lat: -42.734358, lng: 147.501315},
          {lat: -42.735258, lng: 147.438000},
          {lat: -43.999792, lng: 170.463352}
        ]
      }
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzP0NCqUJhmbTCFFr6FX70s2e8otBqQFA&callback=initMap"
  type="text/javascript">
    </script>
  </body>
</html>
