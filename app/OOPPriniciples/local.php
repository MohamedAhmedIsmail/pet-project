<?php

$root = "storage";
$file = 'test.txt';
$contents = 'Hello World!';
$savePath = "{$root}/{$file}";

mkdir(dirname($savePath),0777,recursive:true);
file_put_contents($root.'/'.$file,$contents);

?>