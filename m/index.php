<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/css.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <!-- <script>
            $(document).ready(function(){
                    $(".b1").val("50");
            });
        </script> -->
     <!--    <script type="text/javascript">
                $("#btn1").click(function(){
                    $("#ss1").text("Hello world!");
                });
        </script> -->
    </head>
    <body >
    <progress id="pr" value="1" max="100" style="width: 100%;margin: 0px;"></progress>
        <?php  
           
            $la = $_GET['lat'];
            $lo = $_GET['lon'];
            // echo $la;
            // echo "   ";
            // echo $lo;
        ?>  
        <script type="text/javascript">
            function getLocation(){
                var AA = '<?php echo $la ;?>';
                var BB = '<?php echo $lo ;?>';
                // alert(AA);  
                // alert(BB);
                var myCenter = new google.maps.LatLng(AA,BB);
                var mapCanvas = document.getElementById("map");
                var mapOptions = {center: myCenter, zoom: 13};
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var marker = new google.maps.Marker({position:myCenter});
                marker.setMap(map);
            }
        </script>
        
    <div class="tab" hidden="" >
            <button class="tablinks" onclick="openCity(event, 'P1')" id="defaultOpen">ระดับกลิ่น</button>
            <button class="tablinks" onclick="openCity(event, 'P2')">ชื่อกลิ่น</button>
            <button class="tablinks" onclick="openCity(event, 'P3')">เวลา</button>
            <button class="tablinks" onclick="openCity(event, 'P4')">ตำแหน่ง</button>
    </div>
    <form>
        <div id="P1" class="tabcontent">

<!-- <input type="radio" name="radio" value="first"/> 1 <br/>
<input type="radio" name="radio" value="second"/> 2 <br/>




<script>
$(document).ready(function () {
    $('#myForm').on('click', function () {
        var value = $("[name=radio]:checked").val();

        alert(value);
    })
});
</script> -->
                <center><h3>ความรุนแรงของกลิ่น</h3></center>
                <div class="container">

                        <div class="cc-selector">
                            <center>กลิ่นเบาบาง</center>
                            <input id="p1"  type="radio"    name="a"  value="เบาบาง"  checked="checked"/ onclick="openCity(event, 'P2')">
                            <label class="drinkcard-cc p1 b1"  for="p1"></label>
                            
                        </div>
                        <div class="cc-selector">
                            <center>กลิ่นเบา</center>
                            <input id="p2"  type="radio"    name="a"  value="เบา" onclick="openCity(event, 'P2')"/>
                            <label class="drinkcard-cc p2 b1"  for="p2"></label>
                        </div>
                        <div class="cc-selector">
                            <center>กลิ่นแรง</center>
                            <input id="p3"  type="radio"    name="a"  value="แรง"  onclick="openCity(event, 'P2')"/>
                            <label class="drinkcard-cc p3 b1"  for="p3"></label>
                        </div>
                        <div class="cc-selector">
                            <center>แรงมาก</center>
                            <input id="p4"  type="radio"    name="a"  value="แรงมาก" onclick="openCity(event, 'P2')"/>
                            <label class="drinkcard-cc p4 b1"  for="p4"></label>
                        </div>
                </div>
        </div>

        <div id="P2" class="tabcontent">
                <center><h3>คุณกำลังได้กลิ่นอะไรอยู่</h3></center>
                <div class="container">
                    
                        <div class="cc-selector">
                            <center>กลิ่นอาหาร</center>
                            <input id="pp1"  type="radio"    name="b"  value="กลิ่นอาหาร"  checked="checked"onclick="openCity(event, 'P3')"/>
                            <label class="drinkcard-cc pp1"  for="pp1"></label>
                        </div>
                         <div class="cc-selector">
                            <center>กลิ่นยางไหม้</center>
                            <input id="pp8"  type="radio"    name="b"  value="กลิ่นยางไหม้" onclick="openCity(event, 'P3')"/>
                            <label class="drinkcard-cc pp8"  for="pp8"></label>
                        </div>
                         <div class="cc-selector">
                             <center>กลิ่นสารเคมี</center>
                            <input id="pp9"  type="radio"    name="b"  value="กลิ่นสารเคมี" onclick="openCity(event, 'P3')"/>
                            <label class="drinkcard-cc pp9"  for="pp9"></label>
                        </div>
                        <div class="cc-selector">
                            <center>กลิ่นหญ้า</center>
                            <input id="pp2"  type="radio"    name="b"  value="กลิ่นหญ้า" onclick="openCity(event, 'P3')"/>
                            <label class="drinkcard-cc pp2"  for="pp2"></label>
                        </div>
                        <div class="cc-selector">
                            <center>กลิ่นผลไม้</center>
                            <input id="pp3"  type="radio"    name="b"  value="กลิ่นผลไม้" onclick="openCity(event, 'P3')"/>
                            <label class="drinkcard-cc pp3"  for="pp3"></label>
                        </div>
                        <div class="cc-selector">
                            <center>กลิ่นแก๊ส</center>
                            <input id="pp4"  type="radio"    name="b"  value="กลิ่นแก๊ส" onclick="openCity(event, 'P3')"/>
                            <label class="drinkcard-cc pp4"  for="pp4"></label>
                        </div>
                        <div class="cc-selector">
                            <center>กลิ่นน้ำเน่า</center>
                            <input id="pp5"  type="radio"    name="b"  value="กลิ่นน้ำเน่า" onclick="openCity(event, 'P3')"/>
                            <label class="drinkcard-cc pp5"  for="pp5"></label>
                        </div>
                        <div class="cc-selector">
                            <center>กลิ่นปลา</center>
                            <input id="pp6"  type="radio"    name="b"  value="กลิ่นปลา" onclick="openCity(event, 'P3')"/>
                            <label class="drinkcard-cc pp6"  for="pp6"></label>
                        </div>
                        <div class="cc-selector">
                            <center>กลิ่นขยะ</center>
                            <input id="pp7"  type="radio"    name="b"  value="กลิ่นขยะ" onclick="openCity(event, 'P3')"/>
                            <label class="drinkcard-cc pp7"  for="pp7"></label>
                        </div>
                         <div class="cc-selector">
                             <center>กลิ่นน้ำมัน</center>
                            <input id="pp10"  type="radio"    name="b"  value="mastercard" onclick="openCity(event, 'P3')"/>
                            <label class="drinkcard-cc pp10"  for="pp10"></label>
                        </div>
                         <div class="cc-selector">
                             <center>เพิ่มข้อมูล</center>
                            <input id="pp11"  type="radio"    name="b"  value="เพิ่มข้อมูล" onclick="openCity(event, 'P3')"/>
                            <label class="drinkcard-cc pp11"  for="pp11"></label>
                        </div>
                   
                </div>
        </div>
        <div id="P3" class="tabcontent">
            <center><h3>คุณได้กลิ่นมานานเท่าไร</h3></center>
             <div class="container">

                        <div class="cc-selector">
                            <center>0 - 15 นาที</center>
                            <input id="ppp1"  type="radio"    name="c"  value="0 - 15 นาที" checked="checked" onclick="openCity(event, 'P4')"/>
                            <label class="drinkcard-cc ppp1"  for="ppp1"></label>
                        </div>
                        <div class="cc-selector">
                            <center>0 - 30 นาที</center>
                            <input id="ppp2"  type="radio"    name="c"  value="0 - 30 นาที" onclick="openCity(event, 'P4')"/>
                            <label class="drinkcard-cc ppp2"  for="ppp2"></label>
                        </div>
                        <div class="cc-selector">
                            <center>0 - 45 นาที</center>
                            <input id="ppp3"  type="radio"    name="c"  value="0 - 45 นาที" onclick="openCity(event, 'P4')"/>
                            <label class="drinkcard-cc ppp3"  for="ppp3"></label>
                        </div>
                        <div class="cc-selector">
                            <center>0 - 60 นาที</center>
                            <input id="ppp4"  type="radio"    name="c"  value="0 - 60 นาที" onclick="openCity(event, 'P4')"/>
                            <label class="drinkcard-cc ppp4"  for="ppp4"></label>
                        </div>
                   
                </div>
        </div>
        <div id="P4" class="tabcontent">   
          <!-- <div onclick="getLocation()" style="background-color: lightgreen;width: 100%;height: 50px;">ดูแผนที่</div> -->

            <p id="map" ></p>
           
            <p id="ss1">ระดับของกลิ่น     :</p>
            <p id="ss2">ชนิดของกลิ่น     : </p>
            <p id="ss3">ระยะเวลาของกลิ่น :</p>
            
            <button style="background-color: lightgreen;width: 48.5%;height: 50px;">ส่งข้อมูล</button>
            <button style="background-color: red;width:  48.5%;height: 50px;">ยกเลิก</button>
        </div>
       
     </form>
        <script type="text/javascript" src="js/home.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3Ej0xO6_lSSlOXG41ozVJi-POEaLWS3o&callback=initMap"></script>
<!--
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhNBPSSkItAS_uAVy3-HPG76JmRD28yv4&callback=initMap"></script>
    </body>
-->
</html> 
