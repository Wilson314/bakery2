<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

    $link = mysqli_connect("127.0.0.1","root","","bakery","3307");
    include("connect.php");

$ac_c = $_POST['ac_c'];
$pw_c = $_POST['pw_c'];

//搜尋資料庫資料
$sql = "SELECT * FROM signup where ac_c = '$ac_c'AND pw_c = '$pw_c'";
$ro=mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($ro);
  $total=mysqli_num_rows($ro);
  if($total==1){
     header('location:welcome.html');
  }else{
     echo "帳密錯誤!請重新輸入!";
     echo'<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
  }
?>