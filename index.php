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
        var location = {lat:-0.450198,lng:117.171575};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: location
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzP0NCqUJhmbTCFFr6FX70s2e8otBqQFA&callback=initMap"
  type="text/javascript">
    </script>
  </body>
</html>
