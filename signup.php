<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

    $user = 'root';
    $password = '';
    $db = 'bakery';
    $host = '127.0.0.1';
    $port = 3307;

    $link = mysqli_init();
    $success = mysqli_real_connect(
       $link,
       $host,
       $user,
       $password,
       $db,
       $port
    );

$ac_c = $_POST['ac_c'];
$pw_c = $_POST['pw_c'];
$pw2 = $_POST['pw2'];
$email = $_POST['email'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($ac_c != null && $pw_c != null && $pw2 != null && $pw_c == $pw2)
{
        //新增資料進資料庫語法
        $sql = "insert into signup (ac_c, pw_c, email) values ('$ac_c', '$pw_c', '$email')";
        if(mysqli_query($link,$sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=signup.html>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=signup.html>';
}
?>
