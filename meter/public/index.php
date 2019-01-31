<?php

require __DIR__ . '/../App/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$parts = explode('/', $uri);

$uri = explode('-', ($parts[1]));

$uri = array_map(function($word) { return ucfirst($word); }, $uri);

$uri = implode('', $uri);

$ctrl = $uri ? ucfirst($uri) : 'Index';


try{

    $class = '\App\Controllers\\' . $ctrl;
    $ctrl = new $class;
    $ctrl();

}catch (\App\Exceptions\DbException $error){

    echo 'Ошибка в БД при выполнении запроса: ' . $error->getMessage();
    die;

}