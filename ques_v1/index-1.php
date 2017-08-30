
<!doctype html>
<html>
	<head>
		<title>แบบบันทึกกลิ่น</title>
		<meta charset="utf-8">
		<meta name=”viewport” content=”width=device-width, initial-scale=1.0″> 
		<link rel= "stylesheet" href="css/css.css">
	</head>
	<body>
		<div class="center">
        <?php
            if(!isset($_POST['send']))
			{
                    ?> <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
						
					<fieldset>
    						<legend>กลิ่น</legend>
	                   				<a><input class="heighttext" type="texto" name="a" size="40"  placeholder="กรุณาใส่กลิ่น" font-size="40px" ><br></a>
					</fieldset>
       
					<fieldset>
    						<legend>ระดับกลิ่น</legend>
	                    			<a><input type="radio" name="b" value="H-level"		 >มาก<br></a>  			
    								<a><input type="radio" name="b" value="M-level"	 >ปานกลาง<br></a>
									<a><input type="radio" name="b" value="L-level"	  >น้อย<br></a> 
									<!-- <a><input type="radio" name="b" value="ระดับ 4">ระดับ 4<br></a> 
									<a><input type="radio" name="b" value="ระดับ 5">ระดับ 5<br></a>    -->
					</fieldset>
        
        			<fieldset>
    						<legend>ช่วงเวลาที่ได้กลิ่น</legend>
	                   				<a><input type="radio" name="c" value="Always">ตลอดเวลา<br></a>
									<a><input type="radio" name="c" value="Sometime"  >บางช่วง<br></a>
  							<!--		<a><input type="radio" name="c" value="11-15นาที">11-15 นาที<br></a>
									<a><input type="radio" name="c" value="16-20นาที">16-20 นาที<br></a>
								<a><input type="radio" name="c" value="21-25นาที">21-25 นาที<br></a> -->
					</fieldset>
					<fieldset>
    						<legend>ผู้ใช้</legend>
	                   			<a>	<input  type="radio" name="x" value="1">Amit </a>
								<a>	<input  type="radio" name="x" value="2">Fresh </a>
								<a>	<input  type="radio" name="x" value="3">Toey </a>
								<a>	<input  type="radio" name="x" value="4">Nat </a><br>
								<a>	<input  type="radio" name="x" value="5">Than </a>
								<a>	<input  type="radio" name="x" value="6">May </a>
								<a>	<input  type="radio" name="x" value="7">Porche </a>
					</fieldset>
					<fieldset>
						<legend>ตัวเลือก</legend>
	       							<input type="submit"  name="send" value="ส่งแบบสำรวจ">
	       							<input type="button"  VALUE="แสดงแบบสำรวจ" ONCLICK="window.location.href='http://www.ezsens.net/ques/t53.php'">
					</fieldset>
	
	               </form>
                   <?php	
			}
            else
                {
					$id 		= $_POST['ID'];
					$name_small = $_POST['a'];
					$value_small= $_POST['b'];
					$time_small = $_POST['c'];
					$user_small = $_POST['x'];
					$real_time  = date("H:i:s");
					$real_date  = date("Y-m-d");
					if($name_small != null && $value_small != null && $time_small != null && $user_small != null)
						{
							$link = mysqli_connect("","", "");
	
							mysql_set_charset($link,'utf8');
							$sql ="use ezsensne_db1";
							$re = mysqli_query($link,$sql);
			
							$sql = "insert into u_vote value('null','$name_small','$value_small','$time_small','$user_small','$real_time ','$real_date')";
							$re = mysqli_query($link,$sql);
							if($id = null)
									{
									}
							else
									{
										if($re)
												{
													echo 'compleat';
												}
										else
												{
													echo 'ERROR';
												}
									}
							echo "<a href=index.php>กลับหน้าหลัก</a><p>";
	
						}
					else
					{
						echo 'กรุณาใส่ข้อมูลให้ถูกต้อง';
						?>
						<INPUT TYPE="BUTTON" VALUE="กลับหน้าหลัก" ONCLICK=" window.location.href='http://www.ezsens.net/ques'" >
						<?php
					}
				}
        ?>
			</div>
	</body>
</html>