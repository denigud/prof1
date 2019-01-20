<?php

spl_autoload_register(function ($class){
    $dirStr = __DIR__ . '/../' .  str_replace('\\', '/', $class) . '.php';
    require_once $dirStr;
});
