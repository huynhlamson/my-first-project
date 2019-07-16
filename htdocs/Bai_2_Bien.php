 <html>
 <head>
 	<meta http-equiv='Content-Type' content='text/html'; charset=utf-8'/>
 	<title>Bài 2 : Biến và kiểu dữ liệu</title>
 	<link rel = 'icon' href = 'img/php.png' type = 'image/x-icon'> 
 </head>
 <body>
 	<?php

 		// Mảng 1 chiều
 		$list_name = array('Son ','Danh ','Teo ','Ti');
 		echo $list_name[0];
 		echo $list_name[1];
 		echo $list_name[2];
 		echo $list_name[3]; 

 		echo '<br/>';
 		echo '<br/>';

 		// Mảng có 1 cặp key => value
 		$list_Nhanvien = array(1 => 'Công nghệ thông tin', 2 => 'Kế toán thuế');

 		echo $list_Nhanvien[1];
 		echo '<br/>';
 		echo $list_Nhanvien[2];
 		echo '<br/>';
 		echo '<br/>';

 		// Mảng đa chiều tham chiếu
 		$list_Hocsinh = array(1 => array('hoten' => 'Son','tuoi' => 28), 2 => array('hoten' => 'Teo', 'tuoi' => 30));

 		$array1 = $list_Hocsinh[1];	
 		echo $array1['hoten'] . " " . $array1['tuoi'];
 		echo '<br/>';
 		$array1 = $list_Hocsinh[2];	
 		echo $array1['hoten'] . " " . $array1['tuoi'];
 		echo '<br/>';

 		//Mảng đa chiều (mảng chứa mảng)
 		$list_Car = array(array('BMW','Sport', 300),array('Honda','Sedan',500));
 		echo $list_Car[0][0] . " dạng xe " . $list_Car[0][1] . " công suất là " . $list_Car[0][2];
 		echo '<br/>';
 		echo $list_Car[1][0] . " dạng xe " . $list_Car[1][1] . " công suất là " . $list_Car[1][2];

		echo '<br/>';
 		for ($row = 0; $row < 2; $row++) {
  			echo "<p><b>Row number $row</b></p>";
  			echo "<ul>";
  			for ($col = 0; $col < 3; $col++) {
    			echo "<li>".$list_Car[$row][$col]."</li>";
  			}
  			echo "</ul>";
  		}

		echo '<br/>';
  		class Student{
    		function list_student(){
        		//Code php&mysql select news in database
        		echo "Hiển thị danh sách sinh viên";
    		}
		}

		$student= new Student();
		$student->list_student();

		// Biến siêu toàn cục $GLOBALS
		$x = 2;
		$y = 6;

		function TinhToan(){
			$GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
		}
		TinhToan();
		echo '<br/>';
		echo 'Kết quả biến siêu toàn cục :' . $z;

		echo '<br/>';
		/*echo '<br/>';
		echo $_SERVER['PHP_SELF'];
		echo "<br>";
		echo $_SERVER['SERVER_NAME'];
		echo "<br>";
		echo $_SERVER['HTTP_HOST'];
		echo "<br>";
		echo $_SERVER['SERVER_PORT'];
		echo "<br>";
		echo $_SERVER['HTTP_USER_AGENT'];
		echo "<br>";
		echo $_SERVER['SCRIPT_NAME'];
		echo '<br/>';*/
 	?>

 	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		Name: <input type="text" name="fname">
		<input type="submit" value="test">
	</form>

	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$name = $_REQUEST["fname"];
			if(empty($name)){
				echo "<br/>Không có tên !";
			}
			else{
				echo "<br/>Chào mừng bạn " . $name . " đến với lập trình PHP";
			}
		}	
	?>

	<?php

		$con = true;
		// Ở đây gọi hàm Welcome thì được nhưng Hello thì không
		Welcome();
		if($con)
		{
			function Hello()
			{
				echo "<br/>Hướng dẫn viết hàm Hello ";
			}
		}

		if ($con) Hello();
		    function Welcome() 
		    {
		        echo "Hướng dẫn viết hàm Welcome.....";
		    }

		function Hello1() 
    	{
	        function Welcome1() 
	        {
	            echo "<br/> Welcome to SON IT.";
	        }
    	}

    	Hello1();
    	Welcome1();
	?>	
 </body>
 </html>