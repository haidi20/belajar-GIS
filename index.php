<?php
  include "connect.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
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
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat:35.963900, lng: 139.206662},
          zoom: 6
        });

        var infoWindow = new google.maps.InfoWindow({map:map});

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat : position.coords.latitude,
              lng : position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('lokasi di temukan.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          handleLocationError(true, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos){
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                                'Error: The Geolocation service failed.' :
                                'Error: Your browser doesn\'t support geolocation.');
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzP0NCqUJhmbTCFFr6FX70s2e8otBqQFA&callback=initMap"
  type="text/javascript">
    </script>
  </body>
</html>
