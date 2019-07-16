 <html>
 <head>
 	<meta http-equiv='Content-Type' content='text/html'; charset=utf-8'/>
 	<title>Bài 1 : Hello World in PHP</title>
 	<link rel = 'icon' href = 'img/php.png' type = 'image/x-icon'> 
 </head>
 <body>
 	<?php

 		define('BIEN_HANG_SO',100);

 		$str_php = 'Tôi tên là Huỳnh Lâm Sơn.';
 		echo '<h1>Xin chào, chào mừng bạn đến với lập trình ngôn ngữ PHP</h1>'; 
 		echo '<h2 style=color:blue; font-size:25px>',$str_php,'Tôi đang bắt đầu học lập trình PHP </h2>';

 		// Biến cục bộ
 		function printWelcome(){
 			$str_welcome = 'Hàm đầu tiên trong chương trình';
 			echo 'Biến cục bộ trong PHP <br/>', $str_welcome;	
 		}

		// Biến cục bộ
 		function Calculator(){
 			$num_1 = 3;
 			$num_2 = 10;
 			$result = $num_1 + $num_2;
 			echo '<br/>';
 			echo "Kết quả phép tính {$num_1} + {$num_2} = " , $result;
 		}

 		// Biến toàn cục
 		function Process(){
 			global $counter; 			
 			$counter+=5; 

 			// Một cách khai báo khác biến GLOBAL
 			//$GLOBALS['counter']++;			
 		}

 		// Biến static
 		function DemSoLan(){
 			static $m_count = 0;
 			$m_count++;
 			echo "Số lần truy cập hệ thống : {$m_count} <br/>";
 		}


 		// Thực thi chương trình
 		printWelcome();
 		Calculator();

 		$counter = 20; 		
 		echo '<br/>';
		echo "Biến toàn cục GLOBALS là {$counter} <br/>";
		echo 'Sau khi gọi hàm xử lý thì ';
		Process();
		echo "giá trị biến globals : {$counter} <br/>";

		// Đếm số lần truy cập hệ thống
		$m_count = 10; // Dù có khai báo trước nhưng khi gọi hàm thì biến static trong hàm chạy trước
		DemSoLan();
		DemSoLan();
		DemSoLan();
		DemSoLan();	
		echo "Số lần truy cập hệ thống là : {$m_count} <br/>";
		echo "Đây là hằng số đã khai báo : ", BIEN_HANG_SO;

		echo '<br/>';

		// Sử dụng lệnh print
		$myArray = array("Tôi", 'là', 'ai','?');
  		echo "<pre>";
  		print_r($myArray);
  		echo "</pre>";
		echo '<br/>';

  		$hello = "Bạn có thể viết dấu \" vào giá trị với dấu \\ đằng trước ký tự.";
		echo $hello;
 	?>
 </body>
 </html>