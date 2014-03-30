<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel=stylesheet type="text/css" href="../css/fixbar.css">
<!--<link rel=stylesheet type="text/css" href="css/manage.css">!-->
<title>會員管理</title>


</head>
<body>
<div class="navbar navbar-fixed-top" >
     <div class="navbar-inner" >
        <div class="navcontainer" >
          <ul class="nav">
            <li><a><input type="text"></a></li>
            <li><a href="">搜尋</a></li>
          </ul>
		  <span class="brand" href="#" >Logo</span>
		  <?php ini_set('display_errors', 'On'); include('login_success.php');?>
        </div>
     </div>
 </div>
<div class="manage" style='margin-top:10%;'>
個人資料管理
	<a href="picture_upload.php" ><?php require_once('member_pPath.php');?></a>
	<span>
		<?php
			$Account=$_SESSION['Account'];
			require_once("../db/dblogin.php");
			require_once("../db/dbconnect.php");
			$db=new DB();
			$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
			$sql="SELECT * FROM member where Account = '$Account' ";
			$result = $db->query($link,$sql);
			$row = mysqli_fetch_row($result);
			echo "暱稱：".$row[10]."</br>";
			echo "E-mail：".$row[5];
		?>
		<a href="member_edit.php">編輯</a>
	</span>
</div>
<div class="print_inquiry">
列印進度查詢

<select name="order[]">

<option>近期訂單</option>

<?php

include('order_tracking.php');  
echo "<option>". $row1[0] .$row2[1]."</option>"; 
while($row1= mysqli_fetch_row($result1)+$row2= mysqli_fetch_row($result2) )
{
	{		
		echo "<option>". $row1[0] .$row2[1]."</option>"; 			
	}
}

	
	


	

?>
</select>
<a href="order_history.php">歷史訂單</a>
</div>
<div class="exhibition">
個人展覽
<a href="">作品管理</a>
<a href="">作品上傳</a>
</div>
</body>
</html>