<?php 
	$obj->result  = 'true';
	$obj->message  = '������';
	
	$filename  = iconv("UTF-8","gb2312", $_POST["filename"]) ;
	//$obj->filename =iconv("gb2312","UTF-8","ɾ���ǰ�");
	$obj->filename =$_POST["filename"] ;
	
	if( is_file( $filename ) )
	{
		if( unlink($filename) )
		{
			$obj->result  = 'true';
			$obj->message  = '�ļ���ɾ��';
		}
		else
		{
			$obj->result  = 'false';
			$obj->message  = '�ļ������ڻ��޷�ɾ��!!';
		}
	}
	else
	{
		$obj->result  = 'false';
		$obj->message  =  '������һ����Ч���ļ�';
	}
	$obj->message = iconv("gb2312","UTF-8",$obj->message) ;
echo json_encode($obj);







?>