<?php
	$link = mysqli_connect("","", "");
	if($link)
	{
		
		mysql_set_charset($link,'utf8');
		$sql ="use ezsensne_db1";
		
		$re = mysqli_query($link,$sql);
		
		$sql = "select * from u_vote ;";
		
		$re = mysqli_query($link,$sql);
		
		while($d = mysqli_fetch_array($re))
		{
			
			echo"NM:" .$d['id'].","."ชื่อกลิ่น:".$d['name'].","."ระดับกลิ่น:".$d['value'].","."ช่วงเวลา:".$d['time'].","."User ID:".$d['user_id'].","."เวลา :".$d['r_time'].","."วันที่ :".$d['r_date'].","."Station:".$d['station']."<p>";	
		}
	}
	else
	{
		echo 'DATA BASE ERROR !!!!!!';
	}
?>
<!doctype html>
<html>
	<head>
		<meta name=”viewport” content=”width=device-width, initial-scale=1.0″> 
		<meta charset="utf-8">
		<title>DB Query</title
	</head>
	<body>
	<INPUT TYPE="BUTTON" VALUE="กลับหน้าหลัก" ONCLICK=" window.location.href='http://www.ezsens.net/ques'" >
	</body>
</html>