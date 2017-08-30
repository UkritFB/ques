<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/css.css">
        <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
       
    </head>
    <body>
        <center><a>EZsens&nbsp;&nbsp;</a><a>แบบสอบถาม</a></center> 
            <?php
                $servername = "localhost";
//              $username = "";
//              $password = "";
//              $dbname   = "test_db";
//        
                $username = "ezsensne_ws";
                $password = "";
                $dbname   = "";
                
                isset($_REQUEST['level']) ? $level = $_REQUEST['level'] : $level = '';              //level             $level
                isset($_REQUEST['user'])  ? $user  = $_REQUEST['user']  : $user = '';               //user              $user
                isset($_REQUEST['compass'])? $compass  = $_REQUEST['compass']  : $compass = '';     //com_air           $compass
                $tem = $_POST['tem'];                                                               //temp              $tem
                $name = $_POST['name'];                                                             //name ชื่อกลิ่น        $name
                $station =$_POST['station'];                                                        //staion            $station
                $detel = $_POST['detel'];                                                           //รายละเอียดกลิ่น       $detel  
                $dest =$_POST['dest'];                                                              //Detail station    $dest
                
                    
                date_default_timezone_set("Asia/bangkok");
                $date = date("Y/m/d");                                                              //date              $date
                $time = date("G:i:s");                                                              //time              $time
               
        
                if( $user != null and $name != null and $level != null and $station != null  )
                {
                
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) 
                            {
                                die("Connection failed: " . $conn->connect_error);
                            } 
                        else
                            {
                                //
                                    if( move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
	                                   {
		                                  echo "Copy/Upload Complete<br>";
       
		                                  //*** Insert Record ***//
//                                          $link = mysqli_connect('localhost', 'ezsensne_ws', 'th122959', 'ezsensne_db1');
        
//                                            if($link==FALSE)
//                                            {
//                                                echo 'ERROR';
//                                            }
		
//		                                  $strSQL = "INSERT INTO quest_v3 ";
//		                                  $strSQL .="(image) VALUES ('".$_FILES["filUpload"]["name"]."')";
    
		                                  //$objQuery = mysql_query($strSQL);
        
//                                          $re = mysqli_query($link,$strSQL);
//                                          $link->close();
                                           $sql = "INSERT INTO quest_v3(user,name,detel_smale,level,temp,com_air,station ,detail_station,date ,time,image) VALUES
                                                     ('$user','$name','$detel',$level,$tem,'$compass','$station','$dest','$date','$time','".$_FILES["filUpload"]["name"]."')";
                                            if ($conn->query($sql) === TRUE) 
                                                {
                                                    //  echo "New record created successfully";
                                                    echo"<center><a>คุณได้ทำรายการสำเร็จแล้ว</a></center>";
                                                } 
                                            else 
                                                {
                                                    echo "Error: " . $sql . "<br>" . $conn->error;
                                                }
                                            $conn->close();
	                                   }
                                    else
                                        {
                                            echo 'อัพรูปไม่ได้';
                                        }
                                //
                                //echo "Connected successfully";
                             
                            }
                        
                }
                else
                {
                    
                    echo"<center><a>กรุณาใส่ข้อมุลให้ถูกต้อง</a></center>";
                }

//                echo"$user<br>";
//                echo" $name<br>";
//                echo"$level<br>";
//                echo"$station<br>";
//                echo"$date<br>";
//                echo"$time<br>";
                
            ?>
        
       <center> <button onclick="location.href='index.html'">กลับหน้าหลัก</button> 
         <button onclick="location.href='recive.php'">ดูข้อมูล</button> </center>
    </body>
</html>