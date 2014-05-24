<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
	<style type="text/css">
		.member_pic>img{
			width:46px;
			height:46px;
			border:1px solid gray;
			float:right;
			margin-top:25px;
		}
		
		.text-right{
			position:relative;
			float:right;
			width:140px;
			word-wrap: break-word;
			word-break: normal;
			vertical-align:bottom;
			margin-top:27px;
		}
		.navbar .nav.login_right{
			float:right;
			-webkit-padding-start: 0px;
		}
		.login_right>li{
			float:right;
			color:#999999;
			text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25);
			font-family:Microsoft JhengHei;
			font-size:16px;
			padding-right:5px;
		}
		.login_right>li>a{
			float:right;
			padding:0px 5px 5px 5px;
			color:#999999;
			text-decoration:none;
			text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25);
			font-family:Microsoft JhengHei;
			font-size:16px;
		}
	</style>
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
				echo"<ul class='nav login_right'>";
				echo"<li >".$row[10]."</a></li>";
				echo"</ul>";
				echo"<ul class='nav login_right'>";
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
				echo"<ul class='nav login_right'>";
				echo"<li >".$row[10]."</a></li>";
				echo"</ul>";
				echo"<ul class='nav login_right'>";
				echo"<li ><a href='/zhen/logout.php' >登出</a></li>"; 
				echo"<li ><a href='/zhen/manage.php' >會員中心</a></li>";
				echo"</ul>";				
				echo"</div>";
				echo"<span class='member_pic'><img src='http://graph.facebook.com/".$facebookID."/picture'></span>";				
			}
			else
			{
				echo"<div class='text-right'>";
				echo"<ul class=' pull-right'>";
				echo"<li ><a href='/zhen/login.php' >登入</a></li>";
				echo"<li ><a href='/zhen/register.html'>註冊</a></li>";
				echo"</ul>";
				echo"</div>";
			}
?>			
</body>
</html>