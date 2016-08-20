<?php 
    session_start();
    if (!isset($_SESSION["fecha"])){
        header('Location: ../index.php');
    };



     if (!isset($_GET["lat"])){
         $lat = "19.3552115"; 
         $lng = "-99.3007708";      
     }else{
         $lat = $_GET["lat"]; 
         $lng = $_GET["lng"];      
     }


 ?>


<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; width: 100%;}
    </style>
  </head>
  <body>

        <div id="map"></div>


    <script type="text/javascript">

var map;
function initMap(lat, lng) {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat:<?php echo $lat ?> , lng: <?php echo $lng ?>},
    //19.3552115,-99.3007708
    zoom: 18
  });

    marker = new google.maps.Marker({
    map: map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: {lat: <?php echo $lat ?>, lng: <?php echo $lng ?>}
  });
  marker.addListener('click', toggleBounce);
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAROXfjhJMWNpOKwkmKubtM9diordBg3ng&callback=initMap">
    </script>
  </body>
</html>