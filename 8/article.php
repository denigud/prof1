<?php
require_once  __DIR__.'/classes/DB.php';
require_once __DIR__.'/classes/View.php';
use DB\DB;
use View\View;


$dbh = new DB();
$data = $dbh->query('SELECT * FROM news WHERE id = :id', [':id'=> $_GET['id']]);

$view = new View();
if($data !== false){
    $view->assign('record', $data[0]);
}else{
    $view->assign('record', '');
};

$view->display(__DIR__.'/templates/article.php');