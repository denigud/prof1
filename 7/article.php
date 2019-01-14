<?php

require_once __DIR__.'/classes/News.php';
require_once __DIR__.'/classes/View.php';
require_once __DIR__.'/classes/Article.php';
use News\News;
use View\View;

$news = new News(__DIR__.'/data/');

ob_start();

$data = $news->getData();
$record = $data[$_GET['id']];

echo '<h1>'.$record->getTitle().'</h1>';
echo $record->getText();

$contents = ob_get_contents();
ob_clean();

$view = new View();
$view->assign('contents', $contents);

$view->render('index.php');

$template = ob_get_contents();
ob_end_clean();

$view->assign('index', $template);

$view->display('index');