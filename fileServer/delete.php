<?php 
	$obj->result  = 'true';
	$obj->message  = '哈哈哈';
	
	$filename  = iconv("UTF-8","gb2312", $_POST["filename"]) ;
	//$obj->filename =iconv("gb2312","UTF-8","删掉是吧");
	$obj->filename =$_POST["filename"] ;
	
	if( is_file( $filename ) )
	{
		if( unlink($filename) )
		{
			$obj->result  = 'true';
			$obj->message  = '文件已删除';
		}
		else
		{
			$obj->result  = 'false';
			$obj->message  = '文件不存在或无法删除!!';
		}
	}
	else
	{
		$obj->result  = 'false';
		$obj->message  =  '不是有一个有效的文件';
	}
	$obj->message = iconv("gb2312","UTF-8",$obj->message) ;
echo json_encode($obj);







?>