<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
</head>

<body>
<?php
	if(isset($_SESSION['Account']))
	{	
		unset($_SESSION['Account']);
		echo '登出中......';
		echo '<meta http-equiv=REFRESH CONTENT=1;url=../index.php>';
    }
	else
	{
		echo'無權觀看此頁';
		echo '<meta http-equiv=REFRESH CONTENT=1;url=../index.php>';
	}
?>

</body>
</html>


