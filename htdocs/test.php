<html>
<head>
<title>Kết nối Database trong MySQL Server</title>
</head>
<body>	
	<?php
   
	   $dbhost = 'localhost';
	   $dbuser = 'root';
	   $dbpass = '';
	   $dbname = 'demo';
	   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
	   
	   if(! $conn ) {
		  die('Kết nối đến cơ sở dữ liệu $dbname ' . mysqli_error());
	   }
	   
	   echo "<h1><i style = 'color:red'> Thông tin cơ sở dữ liệu </i></h1><br>";
	   echo "Tên máy chủ : $dbhost<br>";
	   echo "Tài khoản : $dbuser<br>";
	   echo "Mật khẩu : $dbpass<br>";
	   echo "Tên cơ sở dữ liệu : $dbname<br>";
	   echo "<hr>";
	   echo '<b>Kết nối cơ sở dữ liệu thành công !!</b><br/>';
	   mysqli_close($conn);
	?>

	<?php
         /*function getBrowser()
         { 
            $u_agent = $_SERVER['HTTP_USER_AGENT']; 
            $bname = 'Unknown';
            $platform = 'Unknown';
            $version= "";
            
            //Trước hết, chúng ta kiểm tra nền tảng platform
            if (preg_match('/linux/i', $u_agent)) {
               $platform = 'linux';
            }
            
            elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
               $platform = 'mac';
            }
            
            elseif (preg_match('/windows|win32/i', $u_agent)) {
               $platform = 'windows';
            }
            
            // Tiếp đó, lấy tên của User Agent
            if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
            {
               $bname = 'Internet Explorer';
               $ub = "MSIE";
            }
            
            elseif(preg_match('/Firefox/i',$u_agent))
            {
               $bname = 'Mozilla Firefox';
               $ub = "Firefox";
            }
            
            elseif(preg_match('/Chrome/i',$u_agent))
            {
               $bname = 'Google Chrome';
               $ub = "Chrome";
            }
            
            elseif(preg_match('/Safari/i',$u_agent))
            {
               $bname = 'Apple Safari';
               $ub = "Safari";
            }
            
            elseif(preg_match('/Opera/i',$u_agent))
            {
               $bname = 'Opera';
               $ub = "Opera";
            }
            
            elseif(preg_match('/Netscape/i',$u_agent))
            {
               $bname = 'Netscape';
               $ub = "Netscape";
            }
            
            // Cuối cùng, lấy tên của version
            $known = array('Version', $ub, 'other');
            $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
            
            if (!preg_match_all($pattern, $u_agent, $matches)) {
               // nếu không có so khớp nào, tiếp tục ...
            }
            
            
            $i = count($matches['browser']);
            
            if ($i != 1) {
               
               
               //kiểm tra xem version là trước hay sau
               if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
                  $version= $matches['version'][0];
               }
               else {
                  $version= $matches['version'][1];
               }
            }
            else {
               $version= $matches['version'][0];
            }
            
            
            if ($version==null || $version=="") {$version="?";}
            return array(
               'userAgent' => $u_agent,
               'name'      => $bname,
               'version'   => $version,
               'platform'  => $platform,
               'pattern'   => $pattern
            );
         }
         
         //hiển thị kết quả
         $ua=getBrowser();
         $yourbrowser= "Your browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
         
         print_r($yourbrowser);
         */
      	?>

  	   	<?php
	   		/*if( $_POST["location"] )
		   	{
		      $location = $_POST["location"];
		      header( "Location:$location" );
		      
		      exit();
		   	}*/
		?>		

		<?php
			$str = 'Hôm nay là ngày thứ ba';
			echo "<br/>";
			echo "Sơn nói " . "'" . $str . "'<br/><br/>"; 

			echo strip_tags('<b>freetuts.net</b>', 'b');
			echo "<br/>";
			echo "Sau khi cắt chuỗi : ";
			echo substr('freetuts.net',  0, 8);
			echo "<br/>";
			echo "Tách chuỗi theo từ cho trước (Xin) : ";
			echo "freetuts.net Xin Chào";
			echo "<br/>";
			echo "Kết quả tách chuỗi: ";
			echo strstr('freetuts.net Xin Chào', 'Xin');

		?>

	<p>Chọn một trang để truy cập:</p>
      
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
			<select name="location">.

			<option value="https://vietjack.com">
			   vietjack.com
			</option>

			<option value="http://www.google.com">
			   Google Search Page
			</option>

			</select>
			<input type="submit" />
		</form> 
		  
  	<!-- <?php
	   if( $_POST["name"] || $_POST["age"])
	   	{
	      if (preg_match("/[^A-Za-z'-]/",$_POST['name'] ))
	      	{
	         	die ("<br/><br/>Biến name không hợp lệ - nên là các chữ cái");
	      	}
	      
	      echo "<br/> Chào mừng ". $_POST['name']. " ";
	      echo "Bạn ". $_POST['age']. " tuổi.";
	      
	      exit();
	   	}
	?>
   

      	<form action="<?php $_PHP_SELF ?>" method="POST">
         	Họ Tên: <input type="text" name="name" />
         	Tuổi: <input type="text" name="age" />
         	<input type="submit" />
      	</form>  -->

      	<?php
		   session_start();
		   
		   if( isset( $_SESSION['counter'] ) )
		   {
		      $_SESSION['counter'] += 1;
		   }
		   else
		   {
		      $_SESSION['counter'] = 1;
		   }
		   $msg = "Bạn đã truy cập trang này ".  $_SESSION['counter'];
		   $msg .= " lần trong session này.";
		?>

		<?php  echo ( $msg ); ?>

   	<?php
   		$inum = rand(1,5);
   		$hinhanh = "";
   		switch ($inum) {
   			case 1:
   				$hinhanh = "img/1.jpg";
   				break;
   			case 2:
   				$hinhanh = "img/2.jpg";
				break;
			case 3:
				$hinhanh = "img/3.jpg";
				break;
			case 4:
				$hinhanh = "img/4.jpg";
				break;
			case 5:
				$hinhanh = "img/5.jpg";
				break;   				
   			default:
   				$hinhanh = "img/0.jpg";
   				break;
   		}
   		echo "<br/><br/>";

   		echo "<img src = $hinhanh height = 35% width = 30% />";
   	?>

</body>
</html>