<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
</head>

<body>
<?php
	require_once("../db/dblogin.php");
	require_once("../db/dbconnect.php");
	

if($_SESSION['No'] != null)
{
        $memberNo = $_SESSION['No'];
        $db=new DB();
		$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
		$sql="SELECT * FROM member where memberNo = '$memberNo' ";
		$result = $db->query($link,$sql);
		$row = mysqli_fetch_row($result);
    
        echo "<form name='form' method='post' action='mem_edit_finish.php'>";
		echo "暱稱：<input type=\"text\" name=\"Nickname\" value=\"$row[10]\" /><br>";
        echo "密碼：<input type=\"password\" name=\"Password\" value=\"$row[4]\" /> <br>";
        echo "再一次輸入密碼：<input type=\"password\" name=\"Password2\" value=\"$row[4]\" /> <br>";
        echo "電子信箱：<input type=\"text\" name=\"Email\" value=\"$row[5]\" /> <br>";
        
        
		echo "<input type=\"submit\" name=\"button\" value=\"編輯完成\" />";
        echo "</form>";
}
?>
</body>
</html>



