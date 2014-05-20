<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1200px) and (max-width: 1299px)" href="../css/fixbar1280x1024.css" >
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1300px) and (max-width: 1899px)" href="../css/fixbar1366x768.css" >
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1900px)" href="../css/fixbar1920x1080.css" >
<link rel=stylesheet type="text/css" href="../css/manage.css">
<title>會員管理</title>


</head>
<body>
		<div class="navbar navbar-fixed-top" >
		  <div class="navbar-inner" >
		  <span class="brand" href="#" ></span>
			<div class="navcontainer" >
				<?php include('login_success.php')?>
				<ul class="nav searchbox">
					<li><input type="text"  placeholder="搜尋" style="font-color:#a1a1a1"></li>
				</ul> 
				<ul class="nav button">
					<li><a href=""><img src="../img/print.png"></a></li>
					<li><a href=""><img src="../img/platform.png"></a></li>
					<li><a href=""><img src="../img/forum.png"></a></li>
				</ul>
				<span class="nav uploadbutton" href=".."><img src="../img/upload.png"></span>
			</div>
		  </div>
		</div>
	<div>
<div class="middle">
  
<div class="manage">
個人資料管理
	<a href="picture_upload.php" ><?php require_once

('member_pPath.php');?></a>
	<span>
		<?php
			$Account=$_SESSION['Account'];
			require_once("../db/dblogin.php");
			require_once("../db/dbconnect.php");
			$db=new DB();
			$link=$db->connect_db($_DB['host'],$_DB['username'],

$_DB['password'],$_DB['dbname']);
			$sql="SELECT * FROM member where Account = '$Account' 

";
			$result = $db->query($link,$sql);
			$row = mysqli_fetch_row($result);
			echo "暱稱：".$row[10]."</br>";
			echo "E-mail：".$row[5];
		?>
		<a href="member_edit.php" class="button2">編輯</a>
	</span>
</div>

<div class="rightside">
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
<a href="order_history.php" class="button">歷史訂單</a>
</div>
<div class="exhibition">
個人展覽
<a href="" class="button">作品管理</a>
<a href="" class="button">作品上傳</a>
</div>
</div>
</div>
</div>
</body>
</html>