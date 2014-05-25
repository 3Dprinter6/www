<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel="stylesheet" type="text/css" href="../css/fixbar.css" >
<link rel=stylesheet type="text/css" href="../css/manage.css">
<title>會員管理</title>


</head>
<body style="overflow-x: hidden;background-image:url(../img/loginbg.jpg); ">
		<div class="navbar navbar-fixed-top" >
		  <div class="navbar-inner" >
			<div class='fixbarleft' id='fixbarleft'><img src='../img/fixbar_left.png'></div>
			<div class="navcontainer" >
				<?php include('login_success.php')?>
				<ul class="nav searchbox">
						<li><input type="text"  placeholder="搜尋" style="font-color:#a1a1a1"></li>
				</ul>  
				<ul class="nav button">
					<li><a href=""><img src="../img/print.png"></a></li>
					<li><a href="../displayPlatform/index.html"><img src="../img/platform.png"></a></li>
					<li><a href="forum/forum_index.php"><img src="../img/forum.png"></a></li>
				</ul>
				<span class="logo"><a href="../index.php"><img src="../img/print_img/choose.png"></a></span>
				<span class="nav uploadbutton" ><a href="../showMode/file_upload.html"><img src="../img/upload.png"></a></span>
			</div>
			<div class='fixbarright' id='fixbarright'><img src='../img/fixbar_right.png'></div>
		  </div>
		</div>
	<div>
<div class="middle">
  
<div class="manage">
<p>個人資料管理</p>
	<div class="mpicture">
	<a href="picture_upload.php" ><?php require_once('member_pPath.php');?></a>
	</div>
	<div class="edit">
		<?php
			
			require_once("../db/dblogin.php");
			require_once("../db/dbconnect.php");
			$db=new DB();
			$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
			if(isset($_SESSION['Account']))
			{
				$Account=$_SESSION['Account'];
				$sql="SELECT * FROM member WHERE Account = '$Account' ";
			}
			else if(isset($_SESSION['id']))
			{
				$facebookID=$_SESSION['id'];
				$sql="SELECT * FROM member WHERE  facebookID='$facebookID'";
			}
			
			$result = $db->query($link,$sql);
			$row = mysqli_fetch_assoc($result);
			echo "<p>暱稱：".$row['Nickname']."</p>";
			echo "<p>E-mail：</br>".$row['Email']."</p>";
		?>
		<a href="member_edit.php" class="button2" style="margin-left: 210px; margin-top: 35px;">編輯</a>
	</div>
</div>

<div class="rightside">
  <div class="print_inquiry">
<p>列印進度查詢</p>
<form name="form" class="registerform" method="post" action="print_inquiry.php">
<select name="order">
<option >近期訂單</option>
<?php

include('order_tracking.php');  
$orderNo=$row1['orderNo'] ;
echo "<option value='". $orderNo ."'>". $row1['orderNo'] .$row2['productName']."</option>"; 
while($row1= mysqli_fetch_assoc($result1)+$row2= mysqli_fetch_assoc($result2) )
{
	{		
		$orderNo=$row1['orderNo'] ;
		echo "<option value='".$orderNo."'>". $row1['orderNo'] .$row2['productName']."</option>"; 		
		//echo "<li>". $row1['orderNo']  .$row2['productName']."</a></li>"; 		
	}
}
?>
</select>
<input type="submit" class="button2" value="查詢" >
</form>
<a href="order_history.php" class="button" style="margin-top: 30px;">歷史訂單</a>
</div>
<div class="exhibition">
<p>個人展覽</p>
<a href="" class="button">作品管理</a>
<a href="../showMode/file_upload.html" class="button">作品上傳</a>
</div>
</div>
</div>
</div>
</body>
</html>