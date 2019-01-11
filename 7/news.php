<?php

require_once __DIR__.'/classes/News.php';
require_once __DIR__.'/classes/View.php';
require_once __DIR__.'/classes/Article.php';
use News\News;
use View\View;

$news = new News(__DIR__.'/data/data.txt');

ob_start();

echo '<form action="/7/append.php" method="post">';
echo '<input type="text" name="record">';
echo '<button type="submit">Добавить</button>';
echo '</form>';

foreach ($news->getData() as $record){
    echo $record->getTitle();
    echo '<hr>';
};

$contents = ob_get_contents();
ob_clean();

$view = new View();
$view->assign('contents', $contents);

$view->render('index.php');

$template = ob_get_contents();
ob_end_clean();

$view->assign('index', $template);

$view->display('index');