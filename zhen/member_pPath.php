<?php
require_once("../db/dblogin.php");
require_once("../db/dbconnect.php");
$db=new DB();
$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
if(isset($_SESSION['Account']))
{
	$Account=$_SESSION['Account'];
	$sql="SELECT * FROM member where Account = '$Account' ";
}
else if (isset($_SESSION['id']))
{
	$facebookID=$_SESSION['id'];
	$sql="SELECT * FROM member WHERE  facebookID='$facebookID'";
}

$result = $db->query($link,$sql);
$row = mysqli_fetch_assoc($result);
if($row['pPath']!=NULL)
{
	echo "<img src='".$row['pPath']."?type=large'  title='上傳大頭貼' width='168px' height='168px' style='margin-left: 4px; margin-top: 6px;'>";
	
}
else
{
	echo "<img src=\"../img/default.png\"  title=\"上傳大頭貼\" width=\"168\" height='168px' style='margin-left: 4px; margin-top: 6px;' \\>";
	
}
?>