<?php

/**
 * User: bado
 * Date: 3/9/25
 * Time: 2:19 PM
 * @author Baderdine Ben Ibrahim <baderdinedev@gmail.com>
 * @package app\core
 */

namespace app\core;

class Request
{

    public function getPath(): string
    {
        $path =  $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if($position === false){
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function getMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}