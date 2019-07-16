<!--registration.php-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Form đăng ký thông tin</title>
</head>

<body>
    <?php
    if(isset($_POST['Submit'])){

    $emp_name=trim($_POST["emp_name"]);
    $emp_address=trim($_POST["emp_address"]);
    $emp_email=trim($_POST["emp_email"]);

    if($emp_name =="") {
      $errorMsg=  "Lỗi : Xin vui lòng nhập tên của bạn.";
      $code= "1" ;
    }
    //check if email field is empty
    elseif($emp_email == ""){
      $errorMsg=  "Lỗi : Xin vui lòng nhập Email.";
      $code= "2";
    } //check for valid email 
      elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $emp_email)){
      $errorMsg= 'Lỗi : Email của bạn không đúng.';
      $code= "2";
    }

    elseif($emp_address == "") {
      $errorMsg=  "Lỗi : Xin vui lòng nhập địa chỉ.";
      $code= "3";
    }
    else{
      echo "Success";
      //final code will execute here.
    }

    }
    ?>

  <style type="text/css" >
  .errorMsg{border:1px solid red; }
  .message{color: red; font-weight:bold; }
  </style>

  <form name= "registration" id= "registration" method= "post" action= "" >
  <table width= "400" border= "0" align="center" cellpadding= "4" cellspacing= "1">
    <tr><th colspan="2" align="center"> Đăng ký thông tin</th></tr>
    <tr><td colspan="2">
      <?php 
      if (isset($errorMsg)) 
        { 
          echo "<p class='message'>" .$errorMsg. "</p>" ;
        } 
      ?>
    </td></tr>
    <tr>
    <td>Tên của bạn:</td>
    <td><input name= "emp_name" type= "text" id="emp_name" value="<?php if(isset($emp_name)){echo $emp_name;} ?>"
     <?php if(isset($code) && $code == 1){echo "class=errorMsg" ;} ?> ></td>
    </tr>
    <tr>
    <td>Email: </td>
    <td><input name= "emp_email" type= "text" id= "emp_email" value="<?php if(isset($emp_email)){echo $emp_email; }?>"
    <?php if(isset($code) && $code == 2){echo "class=errorMsg" ;}?> ></td>
    </tr>
    <tr>
    <td>Địa chỉ: </td>
    <td><input name== "emp_address" <?php if(isset($code) && $code == 3){echo "class=errorMsg" ;}?> 
     <?php if(isset($emp_address)){echo $emp_address;} ?>>
     </td>
    </tr>

    <tr>
    <td> </td>
    <td><input type= "submit" name= "Submit" value= "Submit" ></td>
    </tr>
  </table>
  </form>
</body>
</html>