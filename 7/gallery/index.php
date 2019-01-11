<?php
session_start();
include_once __DIR__."/functions.php";
include_once __DIR__."/data.php";
require_once __DIR__.'/classes/View.php';

use View\View;

if(key_exists("session_destroy", $_POST) && NULL != getCurrentUser()){
    $_SESSION['user'] = null;
}

if (NULL == getCurrentUser()){
    include_once __DIR__."/login.php";
};

$view = new View();
$view->assign('images', getFilesFromDir());

ob_start();
$view->render('index.php');
$contents = ob_get_contents();
ob_end_clean();

$view->assign('index', $contents);

$view->display('index');