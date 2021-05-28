<html>

<head>
    <meta charset="utf-8">
    <style>
        #res_form {
            width: 700px;
            position: relative;
            left: 700px;
            top: 0px;
        }
        
        #a {
            text-decoration: none;
            height: 50px;
            border: 1px;
            margin: 10px;
            text-align: left;
            background-color: #ffffff75;
        }
        
        #a input {
            border: 1px solid #000000;
            border-radius: 5px;
            float: right;
        }
        
        #a select {
            border: 5px;
            width: 200px;
            border-color: #000000;
            border-radius: 5px;
            float: right;
        }
        
        #bt input {
            float: left;
            margin: 10px;
            width: 50px;
            border-radius: 5px;
            position: relative;
            top: 20px;
            left: 900px;
        }
        
        #bt input:hover {
            cursor: pointer;
        }
        
        body {
            background-image: url(https://img.wallpapersafari.com/desktop/1920/1080/14/1/g7w3HJ.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
        
        .menu li {
            padding: 8px;
            margin-bottom: 7px;
            background-color: #5e6061;
            color: #ffffff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }
        
        .aside {
            background-color: transparent;
            ;
            padding: 0px;
            color: #ffffff;
            text-align: center;
            font-size: 20px;
        }
    </style>
    <script type="text/javascript">
function ShowAnswer(){
    document.getElementById("AnswerBox").innerHTML='新增完成!';
}
</script>
    <title>訂單結果</title>
</head>

<body>
<?php

error_reporting(0);

    header('Content-Type: text/html; charset=utf-8');
    $link = mysqli_connect("127.0.0.1","root","","bakery","3307");
    include("connect.php");
	$store=$_POST['store'];
    $species=$_POST['species'];
    $price=$_POST['price'];
    $size=$_POST['size'];
    $pickpup_name=$_POST['pickpup_name'];
    $cake_address=$_POST['cake_address'];
    $cake_number=$_POST['cake_number'];
    $phone=$_POST['phone'];
	
	$sql_query_login="SELECT * FROM order";
    $result1=mysqli_query($db_link,$sql_query_login) or die("查詢失敗");

    $sql_query="INSERT INTO order_c (store, species, size, price, pickpup_name, cake_address, cake_number, phone)
    VALUES ('$store', '$species', '$size', '$price', '$pickpup_name', '$cake_address', '$cake_number', '$phone')";

    $a = $db_link -> query ($sql_query);
?>


<form method="POST" action="insert.php">
    <div id="res_form">
        <center>
            <br><br><br>
            <h1>屏科大烘焙蛋糕店訂購系統</h1>
            <h2>訂單資訊填寫</h2>
            
                <h3>
                    <div id="a">
                        店家
                        <select name="store">
                            <option select="selected">請選擇店家</option>
                            <option>屏科大烘焙蛋糕店</option>
                            <option>C銘烘焙蛋糕店</option>
                            <option>牛牛烘焙蛋糕店</option>
                        </select>>
                    </div>
                    <div id="a">
                        種類
                        <select name="species">
                            <option select="selected">請選擇商品</option>
                            <option>檸檬蛋糕</option>
                            <option>草莓蛋糕</option>
                            <option>乳酪蛋糕</option>
                            <option>提拉米蘇</option>
                        </select>>
                    </div>

                    <div id="a">
                        數量 >
                        <input type="number" name="cake_number" placeholder="<=100" min="1" max="100" />
                    </div>

                    <div id="a">
                        尺寸(吋)
                        <select name="size">
                            <option select="selected">請選擇尺吋</option>
                            <option>6吋</option>
                            <option>10吋</option>
                        </select>>
                    </div>

                    <div id="a">
                        價錢 >
                        <input type="number" name="price" />
                    </div>

                    <div id="a">
                        地址 >
                        <input type="address" name="cake_address" />
                    </div>

                    <div id="a">
                        手機 >
                        <input type="number" name="phone" />
                    </div>

                    <div id="a">
                        領貨時間 >
                        <input type="date" name="pickup_time" placeholder="" />
                    </div>
    </div>
    </h3>
    <div id="bt">
        <input type="submit" value="新增訂單" style="width:120px;height:40px;" />
        <p></p>
    </div>
    </form>
    <p></p>

    <form method="POST" action="welcome.html">
        <div id="bt">
            <input type="submit" value="返回" style="width:120px;height:40px;" />
        </div>
    </form>

    </center>

</body>

</html>