<?php
require_once  __DIR__.'/classes/DB.php';
require_once __DIR__.'/classes/View.php';
use DB\DB;
use View\View;

$dbh = new DB();

$data = $dbh->query('SELECT * FROM news ORDER BY id DESC', []);

$view = new View();
$view->assign('data', $data);

$view->display(__DIR__.'/templates/news.php');