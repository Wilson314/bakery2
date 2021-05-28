

<p>請輸入信箱以查詢密碼</p>
<form action="api.php?do=mail" method="post">
	<input type="text" name="mail">
	<input type="submit" value="尋找">
	<br>
	<?php
		if(!empty($_GET["mail"]))	echo $_GET["mail"];
	?>
</form>

<?php
case "mail":
	$row = All("select * from user where mail = '".$_POST["mail"]."'")[0];
	if(!empty($row["pw"])) $mail = "您的密碼為：".$row["pw"];
	else $mail = "查無此資料";

	lo("index.php?do=forget&mail=".$mail);
	break;
?>