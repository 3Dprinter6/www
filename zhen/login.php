<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel=stylesheet type="text/css" href="../css/fixbar.css">
<link rel=stylesheet type="text/css" href="../css/login.css">
<?php
session_start();
require("../db/dblogin.php");
require("../db/dbconnect.php");
require("fb_connect.php");
$db=new DB();
$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
$facebook = new Facebook($config);
?>
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
		  <span class="brand" href="#" ><img src='../img/3D-ink.png' ></span>
          <ul class="nav pull-right">
            <li><a href="login.php" >登入</a></li>
			<li ><a href="register.html" >註冊</a></li>
          </ul>
        </div>
      </div>
    </div>
<div class="middle">
	<div class="info">
	  <img src="../img/1.jpg" width="850" height="600">
	</div>
	<div class="login">
		<div class="logo">
			<img src='../img/3D-ink.png' width="130" height="130">
		</div>
		<div class="login_content">
			<form  method="POST" action="connect.php" >
				<ul class="login_insert">
					<li>帳號：<input type="text" name="Account"  ></li>
					<li>密碼：<input type="password" name="Password" ></li>
				</ul>
				<ul class="login_sent">	
					<li><input  type="submit" name="Login" value="登入" ></li>
					<li><p>沒有帳號請<a href="register.html">註冊</a></p></li>
					<li><p>或使用facebook登入</p></li>
				</ul>
				<?php
					$params = array(
						'scope' => 'email',					
						);
					$login_url = $facebook->getLoginUrl($params);	
					$user_id = $facebook->getUser();										
					if($user_id) {
						try {
							$user_profile = $facebook->api('/me','GET');								
							 
							$user_id=$user_profile['id'];
							$user_name=$user_profile['name'];
							$user_email=$user_profile['email'];	
							//echo $user_id.$user_name.$user_email;
							$sql="SELECT * FROM member where facebookID = '$user_id' ";
							$result = $db->query($link,$sql);
							$row = mysqli_fetch_row($result);
							
							if($row[2]!=NULL)	
							{
								$_SESSION['id'] = $user_id;
								echo '登入成功';
								header("Location:../index.php" );
							}else{
								$sql2 = "INSERT INTO member (`facebookID`,`Email`,`Nickname`) values ('$user_id','$user_email','$user_name')";
								$result2 = $db->query($link,$sql2);
								if($result2)
								{
									header("Location:../index.php" );
								}
							}					
						} catch(FacebookApiException $e) {        
							$login_url = $facebook->getLoginUrl(); 
							echo 'Please <a href="' . $login_url . '">login.</a>';
							error_log($e->getType());
							error_log($e->getMessage());
						}
						
					
					} else {    														
							//echo 'Please <a href="' . $login_url . '">login.</a>';
							echo "<a href=".$login_url."><img class='fb' src='../img/fb.PNG' ></a>";										
							
					}
				
				?>
			</form>
		</div>
	</div>
</div>	
<?php //header('Refresh:3');  //for zhen debug usage?>      
</body>
</html>
