<?php 

$uri = $_SERVER["REQUEST_URI"];
if(preg_match("/hash=(.+)$/", $uri, $matches)){
	$hash = $matches[1];
}else{
	errexit();
}

$filename = "./cache/".$hash;
$data = file_get_contents('php://input');
$byte = file_put_contents($filename, $data);

function errexit(){
	header("HTTP/1.0 400 Bad Request");
	exit;
}