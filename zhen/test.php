<html>
<body>
<?php
				//session_start();
				ini_set('display_errors', 'On');
				require_once("src/facebook.php");
				$config = array(
					'appId' => '220348348164863',
					'secret' => '29556caf790128dc76d0390f4160338a',
					'fileUpload' => false, // optional
					'allowSignedRequest' => false, // optional, but should be set to false for non-canvas apps
				);
				$facebook = new Facebook($config);
				$loginUrl = $facebook->getLoginUrl();
				$logoutUrl = $facebook->getLogoutUrl();
				//$facebookID=$_SESSION['id'];
				//require_once("/var/www/db/dblogin.php");
			//	require_once("/var/www/db/dbconnect.php");
				//$db=new DB();
				//$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
				//$sql="SELECT * FROM member where facebookID = '$facebookID' ";
				//$result = $db->query($link,$sql);
				//$row = mysqli_fetch_row($result);
			//	echo"<div class='text-right'>";				
			//	echo"<ul class='nav pull-right-big'>";
				//echo"<li >".$row[10]."</a></li>";
				
				echo 'Please <a href="' . $loginUrl . '">登入</a>';
				$user_id = $facebook->getUser();
				if($user_id)
				{
					echo "<img src='http://graph.facebook.com/".$user_id."/picture'>";
				}
				echo 'Please <a href="' . $logoutUrl . '">登出</a>';
				
?>
<img src='http://graph.facebook.com/100002092052251/picture'>
<a href='<?php echo $loginUrl ?>' >登入</a>
<a href='<?php echo $logoutUrl ?>' >登出</a>
</body>
</html>