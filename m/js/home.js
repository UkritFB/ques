


function openCity(evt, cityName) 
{
    navigator.vibrate([150]);
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    
    
//    var myCenter = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
//    var mapCanvas = document.getElementById("map");
//    var mapOptions = {center: myCenter, zoom: 5};
//    var map = new google.maps.Map(mapCanvas, mapOptions);
//    var marker = new google.maps.Marker({position:myCenter});
//    marker.setMap(map);
    
}
document.getElementById("defaultOpen").click();




var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}




function cc()
{
    navigator.vibrate([100]);
}


 



    
   


