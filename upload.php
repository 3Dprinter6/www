<?php
//session_start();
$uploaddir="upload";  
require_once("db/dblogin.php");
require_once("db/dbconnect.php");
<<<<<<< HEAD
=======
echo $_FILES["normData"]["name"][0];
>>>>>>> a37aca000a973dccc897851c200e34115c7bfade
if (isset($_POST["name"]) && isset($_POST["introduction"] )){
	$arr=array();
	$file=array();
	$flag=array(0,0,0);
	$arr[0] = $_POST["name"];
	$arr[1] = $_POST["category"];
	$arr[2] = $_POST["dir"];
	$arr[3] = $_POST["introduction"];
	
	for ($key=0 ; $key<3 ; $key++){
	
	if (isset($_FILES["normData"]["name"][$key])){
		$file[$key] = $uploaddir."/".$_FILES["normData"]["name"][$key];
		$flag[$key]=1;
	}else{
		$file[$key] = $uploaddir."/".$_POST['dragData'][$key];
	}
	
	if ($flag[$key]){
			$tmp_name = $_FILES["normData"]["tmp_name"][$key];
			move_uploaded_file($tmp_name, $file[$key]);
	}
}

	
	$db=new DB();
	$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
<<<<<<< HEAD
	$sql= "INSERT INTO platform(  `pictureNo` ,  `3dimageLink` ,  `2dimageLink` ,  `physicalImage` ,  `productInfo` ,  `Score` ,  ` Hitrate` ,  `updateTime` ,`memberNo` , `categoryNo`)  VALUES ('$arr[0]',  '$file[0]',  '$file[1]',  '$file[2]',  '$arr[3]',  '0',  '0',  '' , '6' , '1')";
=======
	$sql= "INSERT INTO platform(  `pictureNo` ,  `3dimageLink` ,  `2dimageLink` ,  `physicalLink` ,  `productInfo` ,  `Score` ,  ` Hitrate` ,  `updateTime` ,`memberNo` , `categoryNo`)  VALUES ('$arr[0]',  '$file[0]',  '$file[1]',  '$file[2]',  '$arr[3]',  '0',  '0',  '' , '6' , '1')";
>>>>>>> a37aca000a973dccc897851c200e34115c7bfade
	$result = $db->query($link,$sql);

}
else{
	foreach ($_FILES["ff"]["error"] as $key => $error) {
		if ($error == UPLOAD_ERR_OK) {
			$tmp_name = $_FILES["ff"]["tmp_name"][$key];
			$name = $_FILES["ff"]["name"][$key];
			move_uploaded_file($tmp_name, "$uploaddir/$name");
		}
	}
}



?>


