<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
</head>

<body>
<?php
    	require_once("../db/dblogin.php");
	require_once("../db/dbconnect.php");
	$db=new DB();
	$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
	//$sql="SELECT * FROM member where Account = '$Account' ";
	//$result = $db->query($link,$sql);
	
	
	$Account = $_POST['Account'];
	$Password = $_POST['Password'];
	$Password2 = $_POST['Password2'];
	$Nickname = $_POST['Nickname'];
	$Email = $_POST['Email'];


if($Account != null && $Password != null && $Password2 != null && $Password == $Password2)
{
        
	$sql = "INSERT INTO member (Account,Password,Email,Nickname) values ('$Account','$Password', '$Email','$Nickname')";
	$result = $db->query($link,$sql);
	
	if($result)
        {
			echo '新增成功';
			header("Location:login.php" );
        }
	else
        {
			echo '新增失敗，請重新填寫';
			header("Location:register.html" );
        }
}
else
{
	echo '欄位不可空白，請重新填寫';
	header("Location:register.html" );
}
?>
</body>
</html>


