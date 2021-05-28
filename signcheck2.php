<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

    $link = mysqli_connect("127.0.0.1","root","","bakery","3307");
    include("connect.php");

$ac_s = $_POST['ac_s'];
$pw_s = $_POST['pw_s'];

//搜尋資料庫資料
$sql = "SELECT * FROM login_s where ac_s = '$ac_s'AND pw_s = '$pw_s'";
$ro=mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($ro);
  $total=mysqli_num_rows($ro);
  if($total==1){
     header('location:store_maintain.html');
  }else{
     echo "帳密錯誤!請重新輸入!";
     echo'<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
  }
?>