<?php
spl_autoload_register(function($className){
    $dir = __DIR__;
    $dir = str_replace('middle', '', __DIR__);   
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    include_once $dir.DIRECTORY_SEPARATOR.$className.'.php';
});