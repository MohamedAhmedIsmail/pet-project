<?php

namespace App\OOPPriniciples\src;

class LocalStorage implements FileStorage
{   
    public function put(string $path, string $content): void
    {
        $root = __DIR__.'/../storage';
        $savePath = "{$root}/{$path}";

        mkdir(dirname($savePath),0777,recursive:true);
        file_put_contents($savePath,$content);
    }
}