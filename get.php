<?php

if(empty($_GET['hash'])){
	errexit();
}
$filename = "./cache/".$_GET['hash'];
if(!is_file($filename)){
	errexit();
}
print file_get_contents($filename);

function errexit(){
	header("HTTP/1.0 400 Bad Request");
	exit;
}