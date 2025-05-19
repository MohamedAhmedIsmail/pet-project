<?php

namespace App\OOPPriniciples\src;

interface FileStorage
{
    public function put(string $path,string $content):void;
}