<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel=stylesheet type="text/css" href="../css/fixbar.css">
<link rel=stylesheet type="text/css" href="../css/register.css">
<title>註冊</title>

</head>
<body style="overflow-x: hidden;background-image:url(../img/loginbg.jpg); ">
	<div class="navbar navbar-fixed-top" id='headerlink'>
			<div class="navbar-inner" >
				<div class='fixbarleft' id='fixbarleft'><img src='../img/fixbar_left.png'></div>
				<div class="navcontainer" >
					<?php include('login_success.php')?>
					<ul class="nav searchbox">
						<li><input type="text"  placeholder="搜尋" style="font-color:#a1a1a1"></li>
					</ul> 
					<ul class="nav button">
						<li><a href="../jsstl-master/index.html""><img src="../img/print.png"></a></li>
						<li><a href="../displayPlatform/index.html"><img src="../img/platform.png"></a></li>
						<li><a href="../zhen/forum/forum_index.php"><img src="../img/forum.png"></a></li>
					</ul>
					<span class="logo"><a href="../index.php"><img src="../img/print_img/choose.png"></a></span>
					<span class="nav uploadbutton" ><a href="../showMode/file_upload.html"><img src="../img/upload.png"></a></span>
				</div>
				<div class='fixbarright' id='fixbarright'><img src='../img/fixbar_right.png'></div>
			</div>
		</div>
 <div class="register">
	<form name="form" class="registerform" method="post" action="register_finish.php">
		帳號：<input type="text" name="Account" /> <br />
		密碼：<input type="password" name="Password" /> <br />
		再次輸入密碼：<input type="password" name="Password2" /> <br />
		暱稱：<input type="text" name="Nickname" /><br />
		電子信箱：<input type="text" name="Email" /> <br />
		<ul class="register_sent">
			<li><input type="submit" name="Button" value="確認註冊" class="a_demo_four"></li>
			<li><input type="reset" value="重新填寫" class="a_demo_four"></li>
		</ul>
	</form>
</div>
<script type="text/javascript">
	document.getElementById("fixbarleft").style.width = (window.innerWidth  - 940)/2;
	document.getElementById("fixbarright").style.width = (window.innerWidth  - 940)/2;
</script>
</body>
</html>


