<!doctype html>
<!--##################################################
Mr.Ukrit Fongsomboon
E-mail:Kobori4268@gmail.com
11-06-2016
###################################################-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/css1.css">
        <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    </head>
    <body>
    <?php
	   $objConnect = mysql_connect("","","") or die("Error Connect to Database");
	   $objDB = mysql_select_db("ezsensne_db1");
	   $strSQL = "SELECT * FROM quest_v3 ORDER BY id DESC";
	   $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
    ?>
    
    
    <table width="100%" border="1">
        <tr>
            <th>  <div align="center">ID </div></th>
            <th> <div align="center">Picture</div></th>
            <th> <div align="center">ผู้บันทึก</div></th>
            <th> <div align="center">ชื่อกลิ่น</div></th>
            <th> <div align="center">รายละเอียด(กลิ่น)</div></th>
            <th> <div align="center">ระดับกลิ่น</div></th>
            <th> <div align="center">อุณหภูมิ</div></th>
            <th> <div align="center">ทิศทางกลิ่น</div></th>
            <th> <div align="center">สถานี</div></th>
            <th> <div align="center">รายละเอียด(สถานี)</div></th>
            <th> <div align="center">วันที่(y/m/d)</div></th>
            <th> <div align="center">เวลา(h/m/s)</div></th>
        
            <th> <div align="center">ชื่อกลิ่น</div></th>
            
            
            
            <th> <div align="center">Edit</div></th>
        </tr>
    
    
        <?php
	           while($objResult = mysql_fetch_array($objQuery))
	                   {
        ?>
                    <tr>
                        <td><div align="center"><?php echo $objResult["id"];?></div></td>
                        <td><center><img src="myfile/<?php echo $objResult["image"];?>"></center></td>
                        <td><div align="center"><?php echo $objResult["user"];?></div></td>
                        <td><div align="center"><?php echo $objResult["name"];?></div></td>
                        <td><div align="center"><?php echo $objResult["detel_smale"];?></div></td>
                        <td><div align="center"><?php echo $objResult["level"];?></div></td>
                        <td><div align="center"><?php echo $objResult["temp"];?></div></td>
                        <td><div align="center"><?php echo $objResult["com_air"];?></div></td>
                        <td><div align="center"><?php echo $objResult["station"];?></div></td>
                        <td><div align="center"><?php echo $objResult["detail_station"];?></div></td>
                        <td><div align="center"><?php echo $objResult["date"];?></div></td>
                        <td><div align="center"><?php echo $objResult["time"];?></div></td>
                        
                        
                        <td><center><?php echo $objResult["name"];?></center></td>
                        <td><center><a href="PageUploadToMySQL4.php?FilesID=<?php echo $objResult["FilesID"];?>">Edit</a></center></td>
            </tr>
        <?php
	                   }
        ?>
    </table>
    <?php
        mysql_close($objConnect);
    ?>
    <a href="index.html">HOME</a>
</body>
</html>