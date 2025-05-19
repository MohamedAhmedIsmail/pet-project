<?php
use Aws\S3\S3Client;

$s3key = 'ACXCSDFEWBBWFQE123';
$s3Secret = 'ASDFD@FFDSDF5ssfdsvfdbfdDVFVTRH134rdHGRE';

$file = 'test.txt';
$contents = 'Hello World!';
$bucket = "myBucket";
mkdir(dirname($savePath),0777,recursive:true);
file_put_contents($root.'/'.$file,$contents);

$s3 = new S3Client([
    'version'=>'latest',
    'region'=>'us-west-2',
    'credential'=>[
        'key'=>$s3key,
        'secret'=>$s3Secret
    ]
]);
$s3->putObject(array(
    'Bucket'     => $bucket,
    'Key'        => $file,
    'Body'        => $contents,
));
?>