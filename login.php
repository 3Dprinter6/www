<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<link rel=stylesheet type="text/css" href="css/fixbar.css">
<link rel=stylesheet type="text/css" href="css/login.css">
<title>會員登入</title>
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
          <ul class="nav pull-right">
            <li><a href="login.html" target="_blank">登入</a></li>
          </ul>
        </div>
      </div>
    </div>
<div class="middle">
  <div class="info">
  介紹
  </div>
  <div class="login">
    <div class="logo">
    LOGO
    </div>
	<div class="login_content">
	  <ul class="login_insert">
		<li>帳號：<input type="text" name="Account"  ></li>
		<li>密碼：<input type="password" name="Password" ></li>
	  </ul>
	  <ul class="login_sent">	
                <li><input  type="submit" name="Login" value="登入" ></li>
		<li><p>沒有帳號請<a href="register.html">註冊</a></p></li>
                <li><p>或使用facebook登入</p></li>
	  </ul>
          <a href=""><img src="img/fb.PNG" ></a>
	  <form  method="POST" action="connect.php" >
	  </form>
        </div>
  </div>
</div>	
<?php //header('Refresh:3');  //for zhen debug usage?>      
</body>
</html>
