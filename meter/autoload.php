<?php

function __autoload($className)
{
    require __DIR__ . '/classes/' .
        str_replace('\\', '/', $className) .
        '.php';
}