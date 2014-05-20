<?php
$Account=$_SESSION['Account'];
require_once("../db/dblogin.php");
require_once("../db/dbconnect.php");
$db=new DB();
$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
$sql="SELECT * FROM member where Account = '$Account' ";
$result = $db->query($link,$sql);
$row = mysqli_fetch_row($result);
if($row[6]!=NULL)
{
	echo "<img src=\"../".$row[6]."\"  title=\"上傳大頭貼\" width=\"150\" \\>";
	
}
else
{
	echo "<img src=\"../img/default.png\"  title=\"上傳大頭貼\" width=\"150\" \\>";
	
}
?>