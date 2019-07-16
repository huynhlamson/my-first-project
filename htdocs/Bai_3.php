 <html>
 <head>
 	<meta http-equiv='Content-Type' content='text/html'; charset=utf-8'/>
 	<title>Bài 3 : Hàm trong PHP</title>
 	<link rel = 'icon' href = 'img/php.png' type = 'image/x-icon'> 
 </head>
 <body>
 	<h1>Hướng dẫn sử dụng Hàm trong PHP</h1>
	<?php 
		function Cong($a, $b)
		{
			$kq = $a + $b;
			//echo "Kết quả Cộng $a + $b = $kq";
			return $kq;
		}

		function Tru($a, $b)
		{
			$kq = $a - $b;
			//echo "Kết quả Trừ $a - $b = $kq";
			return $kq;
		}

		function Nhan($a, $b)
		{
			$kq = $a * $b;
			//echo "Kết quả Nhân $a * $b = $kq";
			return $kq;
		}

		function Chia($a, $b)
		{
			$kq = $a / $b;
			//echo "Kết quả Chia $a / $b = $kq";
			return $kq;
		}

		$number1 = $number2 = "";
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if(empty($_POST['sothu1']))
			{
				$number1 = "Nhập giá trị số thứ 1";	
			}
			else
			{
				$number1 = test_input($_POST['sothu1']);
			}

			if(empty($_POST['sothu2']))
			{
				$number2 = "Nhập giá trị số thứ 2";	
			}
			else
			{
				$number2 = test_input($_POST['sothu2']);
			}
		}	

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}	
	?>
	<form name="tinhtoan" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table width="500px" height="120px" border="0px" cellpadding="0" cellspacing="0">
			<tr>
				<td style="width: 120px">
					Số thứ 1 : 
				</td>
				<td>
					<input type="text" name="sothu1" 
					<?php 
					if(isset($_POST['sothu1']) && $number1 != "Nhập giá trị số thứ 1") 
						echo "value = $number1"; 
					?> 
					/>
				</td>
				<td style="width: 150px">
					<?php 
						if(empty($_POST['sothu1']))
							echo "<span style= 'color: #FF0000'> $number1 </span>";
						//else
							//echo "$number1";
					?>
				</td>
			</tr>
			<tr>
				<td>
					Số thứ 2 : 
				</td>
				<td>
					<input type="text" name="sothu2" 
					<?php if(isset($_POST['sothu2']) && $number2 != "Nhập giá trị số thứ 2") 
						echo "value = $number2"; 
						?> 
					/>
				</td>
				<td style="width: 150px">
					<?php 
						if(empty($_POST['sothu2']))
							echo "<span style = 'color: #FF0000'> $number2 </span>";
						//else
							//echo "$number2";
					?>
				</td>
			</tr>
			<tr>
				<td>
					Phép tính :
				</td>
				<td>
					<select name="chon">						
					  <option value="cong" <?php if(isset($_POST['chon'])) if($_POST['chon'] == "cong") echo "selected='active'"; ?> >Cộng</option>
					  <option value="tru" <?php if(isset($_POST['chon'])) if($_POST['chon'] == "tru") echo "selected='active'"; ?>>Trừ</option>
					  <option value="nhan" <?php if(isset($_POST['chon'])) if($_POST['chon'] == "nhan") echo "selected='active'"; ?>>Nhân</option>
					  <option value="chia" <?php if(isset($_POST['chon'])) if($_POST['chon'] == "chia") echo "selected='active'"; ?>>Chia</option>
					</select>
				</td>
				<td>					
				</td>
			</tr>
			<tr>
				<td>
					Kết quả :
				</td>
				<td>
					<?php
						if(!empty($_POST['sothu1']) && !empty($_POST['sothu2']))
						{
							$result = "";		
							if($_POST['chon'] == "cong")
							{
								$result = Cong($number1,$number2);								
								echo "<b>$result</b>";
							}
							else if($_POST['chon'] == "tru")
							{
								$result = Tru($number1,$number2);								
								echo "<b>$result</b>";
							}
							else if($_POST['chon'] == "nhan")
							{
								$result = Nhan($number1,$number2);								
								echo "<b>$result</b>";
							}
							else if($_POST['chon'] == "chia")
							{
								$result = Chia($number1,$number2);								
								echo "<b>$result</b>";
							}
						}							
					?>
				</td>
				<td>					
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="pheptinh" value="Tính Toán">
				</td>
				<td>					
				</td>		
			</tr>
		</table>
	</form>
 </body>
 </html>