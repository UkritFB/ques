 

function openCity(evt, cityName) 
{        
    var r1 = $("input[name='a']:checked").val();
    var r2 = $("input[name='b']:checked").val();
    var r3 = $("input[name='c']:checked").val();
    alert(r1);alert(r2);alert(r3);
    // alert(cityNames);
    navigator.vibrate([100]);
    setTimeout(function()
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
            
        }, 500);
    setTimeout(function(){ getLocation(); }, 4000);
   
}
document.getElementById("defaultOpen").click();

// function getLocation()
// {
//     AA = '<?php echo $la ;?>';
//     BB = '<?php echo $lo ;?>';
//     alert(AA);  
//     alert(BB);
//     var myCenter = new google.maps.LatLng(AA,BB);
//     var mapCanvas = document.getElementById("map");
//     var mapOptions = {center: myCenter, zoom: 13};
//     var map = new google.maps.Map(mapCanvas, mapOptions);
//     var marker = new google.maps.Marker({position:myCenter});
//     marker.setMap(map);
// }


// function cc()
// {
//  getLocation();
   
// }



// var x = document.getElementById("demo");

// function getLocation() {
//     if (navigator.geolocation) {
//         navigator.geolocation.getCurrentPosition(showPosition);
//     } else { 
//         x.innerHTML = "Geolocation is not supported by this browser.";
//     }
// }

// function showPosition(position) {
//     x.innerHTML = "Latitude: " + position.coords.latitude + 
//     "<br>Longitude: " + position.coords.longitude;
    
    
// }

 



    
   


