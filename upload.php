<?php
//session_start();
$uploads_dir = 'upload';//存放上傳檔案資料夾
if (isset($_POST["name"]) && isset($_POST["introduction"] )){
	$arr=array();
	$arr[0] = $_POST["name"];
	$arr[1] = $_POST["category"];
	$arr[2] = $_POST["dir"];
	$arr[3] = $_POST["introduction"];
	echo $_FILES["normData"]["name"][0];

	/*for ($i=0 ; $i<3 ; $i++){
		if (!isset ($_FILES["base64Data"][$i])){
			if (!isset($_FILES["normData"][$i]))
				$arr[4+$i] = NULL;
			else
				$arr[4+$i] = "upload/".$_FILES["normData"]['name'][$i];
		}else 
			$arr[4+$i] = "upload/".base64_decode($_FILES["base64Data"]['name'][$i]);

	} */

	//$account = $_SESSION['memberNo'];
	//echo $_SESSION['memberNo'];

	require_once("db/dblogin.php");
	require_once("db/dbconnect.php");
	$db=new DB();
	$link=$db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
	$sql= "INSERT INTO platform (pictureNo, 3dimageLink, 2dimageLink,physicalImage, productInfo, memberNo, categoryNo) VALUES ('$arr[0]', '123', '564', '516', '$arr[3]', '6', '1')";
	$result = $db->query($link,$sql);
}
else{
	foreach ($_FILES["ff"]["error"] as $key => $error) {
		if ($error == UPLOAD_ERR_OK) {
			$tmp_name = $_FILES["ff"]["tmp_name"][$key];
			$name = $_FILES["ff"]["name"][$key];
			move_uploaded_file($tmp_name, "$uploads_dir/$name");
		}
	}
}



?>


