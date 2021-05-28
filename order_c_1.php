<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>訂單系統</title>
</head>
<link rel="stylesheet" type="text/css" href="css/person.css">
<style type="text/css">
.table{
    position: relative;
    left: 100px;
    width: 1200px;
}
a{
    text-decoration: none;
}
#bt{
    border: 1px solid #000000;
    border-bottom-color: #000000;
    border-radius: 5px;
}
</style>

<body>
    <h1 align="center">我的訂單</h1>
    <div>
        <form action="order_c_1.php" method="post" id="order">
            <table class="table" border="1">
                <thead>
                    <tr>

                    </tr>
                </thead>
            </table>
        </form>
    </div>
</body>






$userid = $_SESSION[ 'user_id' ];
/*订单表、预约表连接查询*/
$query = "select * from info,reserve where info.user_id='$userid' and info.user_id=reserve.user_id and info.re_date=reserve.re_date";
$result = mysqli_query( $link, $query );

while ($arr = mysqli_fetch_array( $result )) {
echo "";
echo "";
echo "";
echo "";
echo "";
echo "";
echo "";
echo "";
echo "";
echo "";
echo "";
echo "";
echo "";
}
?>

订单号	预约人姓名	口罩类型	分配数量	预约数量	电话	地址	订单状态	预约日期	期望到货日期	修改
" . $arr[ 'order_id' ] . "	" . $arr[ 'user_name' ] . "	" . $arr[ 'mask_type' ] . "	" . $arr['allocate_num'] ."	" . $arr['r_num'] ."	" . $arr[ 'phone' ] . "	" . $arr[ 'address' ] . "	" . $arr['statue'] ."	" . $arr['re_date'] ."	" . $arr['ex_date'] ."	修改

返回




————————————
本博文版权归作者所有！
禁止商业转载等用途或联系作者授权，非商业转载请注明出处！
作者：Charzueus 来源：博客园
本文链接：https://www.cnblogs.com/chenzhenhong/p/13710125.html
版权声明：本文为博主原创文章，转载请附上原文出处链接和本声明。