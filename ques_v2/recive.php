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
//                $servername = "localhost";
//                $username = "";
//                $password = "";
//                $dbname   = "test_db";
        
                $username = "";
                $password = "";
                $dbname   = "";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) 
                    {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                else
                    {
                            
                       // echo "Connected successfully"; 
                        $query = "SELECT * FROM table1";
                        $result = mysqli_query($conn, $query);
                    
                        echo "<table border='1' align='center' width=80%>";
                        //หัวข้อตาราง
                        echo "<tr align='center' bgcolor='#CCCCCC'><td>ผู้บันทึก</td><td>ชื่อกลิ่น</td><td>ลักษณะกลิ่น</td><td>ระดับกลิ่น</td><td>ทิศทางของลม</td><td>sesson</td><td>dess</td><td>สถานี</td><td>dest</td><td>วันที่ ปี/เดือน/วัน</td><td>เวลา h/m/s</td></tr>";
                        while($row = mysqli_fetch_array($result)) 
                            { 
                            echo "<tr>";
                                    echo "<td>" .$row["user"] .   "</td> "; 
                                    echo "<td>" .$row["name"] .   "</td> ";  
                                    echo "<td>" .$row["detel"] .  "</td> "; 
                                    echo "<td>" .$row["level"] .  "</td> ";
                                    echo "<td>" .$row["compass"] ."</td> ";
                                    echo "<td>" .$row["sesson"] ."</td> ";
                                    echo "<td>" .$row["dess"] ."</td> ";
                                    echo "<td>" .$row["station"] ."</td> ";
                                    echo "<td>" .$row["dest"] .   "</td> ";
                                    echo "<td>" .$row["date"] .   "</td> ";
                                    echo "<td>" .$row["time"] .   "</td> ";
                            echo "</tr>";
                            }
                        echo "</table>";
                        //5. close connection
                        mysqli_close($conn);
                    }
                        
            ?>
        
        
    <center> <button onclick="location.href='index.html'">กลับหน้าหลัก</button></center> 
    </body>
</html>