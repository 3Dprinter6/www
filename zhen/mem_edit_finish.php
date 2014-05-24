<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
</head>

<body>
</body>
</html>
<?php
require_once("../db/dblogin.php");
require_once("../db/dbconnect.php");
$Password = $_POST['Password'];
$Password2 = $_POST['Password2'];
$Email = $_POST['Email'];
$Nickname = $_POST['Nickname'];
if($Nickname!=null &&$Password != null && $Password2 != null && $Password == $Password2)
{
    $Account = $_SESSION['Account'];
	$db=new DB();
	$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
	$sql = "UPDATE member SET Password='$Password', Email='$Email', Nickname='$Nickname' WHERE Account='$Account'";
	$result = $db->query($link,$sql);        
    if($result)
		{
            echo '修改成功!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=manage.php>';
        }   
	else
        {
            echo '修改失敗!請重新填寫';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=member_edit.php>';
        }
}
if($Nickname == null || $Password == $Password2 || $Password == null)
{
        echo '不可以留白，請重新填寫';
       echo '<meta http-equiv=REFRESH CONTENT=2;url=member_edit.php>';
}
?>