<?php
	$link = mysqli_connect("localhost","", "");
	if($link)
	{
		
		mysql_set_charset($link,'utf8');
		$sql ="use ezsensne_db1";
		$re = mysqli_query($link,$sql);
		$sql = "select * from u_vote where id ='2';";
		$re = mysqli_query($link,$sql);
		while($d = mysqli_fetch_array($re))
		{
			
			//echo"ID:".$d['ID'].
			//	"<br>NAME:".$d['NAME'].
			//	"<br>PASS:".$d['PASS']."<p>";	
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
		<title>HOME</title>
	</head>
	<body>
		
	 <!-- <p id="demo"></p> -->
	 
	<script>
		onload = getLocation;
		var x = document.getElementById("demo");

	
		function getLocation() 
		{
			if (navigator.geolocation) 
			{
				navigator.geolocation.getCurrentPosition(showPosition);
			} 
			else 
			{ 
				x.innerHTML = "Geolocation is not supported by this browser.";
			}
		}

		function showPosition(position) 
		{
			x.innerHTML = "ละติจูท: " + position.coords.latitude + 
			"<br>ลองติจูท: " + position.coords.longitude;
		}
		
	</script>
		<a href = "t53.php">SHOW USER<br></a>
		<a href = "t52.php">REGISTER<br></a>
	</body>
</html>