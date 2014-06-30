<?php
	/* Note: This thumbnail creation script requires the GD PHP Extension.  
		If GD is not installed correctly PHP does not render this page correctly
		and SWFUpload will get "stuck" never calling uploadSuccess or uploadError
	 这是基于swfupload的演示demo改造出的一个php上传后台
	 上传表单里，文件input的name="Filedata" 不能用"file" ,常有冲突
	 */

	// Get the session Id passed from SWFUpload. We have to do this to work-around the Flash Player Cookie Bug
	if (isset($_POST["PHPSESSID"])) {
		session_id($_POST["PHPSESSID"]);
	}

	session_start();
	ini_set("html_errors", "0");

	// Check the upload
	if (!isset($_FILES["Filedata"]) || !is_uploaded_file($_FILES["Filedata"]["tmp_name"]) || $_FILES["Filedata"]["error"] != 0) {
		$obj->result  = 'false';
		$obj->message = '服务器错误' ;
		echo json_encode($obj);
		exit(0);
	}

	if (!isset($_SESSION["file_info"])) {
		$_SESSION["file_info"] = array();
	}
	
	//$fileName = md5(rand()*10000000) . ".jpg";
	$fileName = $_FILES["Filedata"]["name"] ;
	move_uploaded_file($_FILES["Filedata"]["tmp_name"], "../upload/" .  iconv("UTF-8","gb2312", $fileName));

	$file_id = md5(rand()*10000000);
	
	$_SESSION["file_info"][$file_id] = $fileName;

	$obj->result  = 'true';
	$obj->fileName = "../upload/" . $fileName ;
	
	//echo "{Name:" . $fileName . "}" ;	// Return the file id to the script
	echo json_encode($obj);
?>