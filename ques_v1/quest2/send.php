<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/css.css">
        <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
       
    </head>
    <body>
            <?php
                $servername = "localhost";
                $username = "";
                $password = "";
                $dbname = "test_db";

                $user = $_POST['user'];
                $name = $_POST['name'];
                $level= $_POST['level'];
                $station =$_POST['station'];
                 
                date_default_timezone_set("Asia/bangkok");
                $date = date("Y/m/d");
                $time = date("h:i:s");             
        
                if( $user != null and $name != null and $level != null and $station != null )
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
                            
                                //echo "Connected successfully";
                                $sql = "INSERT INTO table1(user,name,level,station,date,time) VALUES($user,'$name',$level,$station, '$date','$time')";
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
        
       <center> <button onclick="location.href='index.html'">กดกลับ</button> </center>
    </body>
</html>