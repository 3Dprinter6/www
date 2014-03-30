<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<style type="text/css">
	.nav{
		margin-left:0;
		margin-bottom:18px;
		list-style:none;
	}
	.nav.pull-right{
		float:right;
		margin:10px 0 0 0;
	}
</style>
</head>
<body>
<?php 
			ini_set('display_errors', 'On');
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
				echo"<ul class='nav pull-right'>";
				echo"<li style='color:#FFD8AF;'><a href='zhen/manage.php' >".$row[10]."</a></li>"; //路徑有問題
				echo"<li ><a href='zhen/logout.php' >登出</a></li>"; //路徑有問題
				echo"</ul>";
			}
			else
			{
				echo"<ul class='nav pull-right'>";
				echo"<li ><a href='./zhen/login.php' >登入</a></li>";
				echo"<li ><a href='./zhen/register.html'>註冊</a></li>";
				echo"</ul>";
			}
?>			
</body>
</html>