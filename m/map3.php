<!DOCTYPE HTML>
<html>
   <head>
   
      <script type="text/javascript">
		
        function init() {


 var mapOptions = {
    zoom: 8,
    mapTypeId: google.maps.MapTypeId.ROADMAP
 };


 map = new google.maps.Map(document.getElementById('map-canvas'),
  mapOptions);



if(navigator.geolocation) {
navigator.geolocation.getCurrentPosition(function(position) {
  var pos = new google.maps.LatLng(position.coords.latitude,
                                   position.coords.longitude);

  var infowindow = new google.maps.InfoWindow({
    map: map,
    position: pos,
    content: 'Location found using HTML5.'
  });

  map.setCenter(pos);
}

 } else {
alert('Geolocation not detected');   
}
}
      </script>
		
   </head>
   <body>
      
      <form>
         <input type="button" onclick="getLocation();" value="Get Location"/>
      </form>
      
   </body>
</html>