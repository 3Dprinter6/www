<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<?php
	require_once("db/dblogin.php");
	require_once("db/dbconnect.php");
	$db=new DB();
	$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
	
	/*$sql="SELECT * FROM member where Account = '$Account' ";
	$result = $db->query($link,$sql);
	$row = mysqli_fetch_row($result);*/

	$recipient=$_POST['recipient'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$ps=$_POST['ps'];
	print $recipient;



?>
