<?php


function readAll($filename)
{
	
	$handler=fopen($filename, 'r');
	$fileContent=[];
	while(! feof($handler)){
	$content=fgets($handler);
    $data=explode('|' , $content);
	
    $fileContent[]=[
	
	'username'=>$data[0];	
	'message'=>$data[1];	
		]
	}
	fclose($handler);
	return $fileContent;
	
}
function addMessageAndSave($filename, $message)
{
	$handler=fopen($filename, 'a');
	$data=implode('|', $message);
	$data.="<br>";
	fwrite($handler, $data);
	fclose($handler);
}
	

