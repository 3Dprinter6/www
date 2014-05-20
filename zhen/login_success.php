<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 1299px)" href="../css/fixbar1280x1024.css" >
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1300px) and (max-width: 1399px)" href="../css/fixbar1366x768.css" >
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1400px) and (max-width: 1550px)" href="../css/fixbar1440x900.css" >
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1551px) and (max-width: 1899px)" href="../css/fixbar1600x900.css" >
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 1900px)" href="../css/fixbar1920x1080.css" >
</head>
<body>
<?php 
			ini_set('display_errors', 'On');//debug用			
			if(isset($_SESSION['Account']))
			{	
				$Account=$_SESSION['Account'];
				require_once("/var/www/db/dblogin.php");
				require_once("/var/www/db/dbconnect.php");
				$db=new DB();
				$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
				$sql="SELECT * FROM member where Account = '$Account' ";
				$result = $db->query($link,$sql);
				$row = mysqli_fetch_row($result);
				echo"<div class='text-right'>";				
				echo"<ul class='nav pull-right'>";
				echo"<li >".$row[10]."</a></li>";
				echo"</ul>";
				echo"<ul class='nav pull-right'>";
				echo"<li ><a href='/zhen/logout.php' >登出</a></li>"; 
				echo"<li ><a href='/zhen/manage.php' >會員中心</a></li>";
				echo"</ul>";				
				echo"</div>";
				echo"<span class='member_pic'><img src='".$row[6]."'></span>";
			}
			else if(isset($_SESSION['id']))
			{
				$facebookID=$_SESSION['id'];
				require_once("/var/www/db/dblogin.php");
				require_once("/var/www/db/dbconnect.php");
				$db=new DB();
				$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
				$sql="SELECT * FROM member where facebookID = '$facebookID' ";
				$result = $db->query($link,$sql);
				$row = mysqli_fetch_row($result);
				echo"<div class='text-right'>";				
				echo"<ul class='nav pull-right-big'>";
				echo"<li >".$row[10]."</a></li>";
				echo"</ul>";
				echo"<ul class='nav pull-right'>";
				echo"<li ><a href='/zhen/logout.php' >登出</a></li>"; 
				echo"<li ><a href='/zhen/manage.php' >會員中心</a></li>";
				echo"</ul>";				
				echo"</div>";
				echo"<span class='member_pic'><img src='http://graph.facebook.com/".$facebookID."/picture'></span>";				
			}
			else
			{
				echo"<div class='text-right'>";
				echo"<ul class='nav pull-right'>";
				echo"<li ><a href='/zhen/login.php' >登入</a></li>";
				echo"<li ><a href='/zhen/register.html'>註冊</a></li>";
				echo"</ul>";
				echo"</div>";
			}
?>			
</body>
</html>