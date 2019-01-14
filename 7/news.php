<?php

require_once __DIR__.'/classes/News.php';
require_once __DIR__.'/classes/View.php';
require_once __DIR__.'/classes/Article.php';
use News\News;
use View\View;

$news = new News(__DIR__.'/data/');

ob_start();

echo '<form action="/7/append.php" method="post">';
echo 'Заголовок: <input type="text" name="title">';
echo ' Краткое описание: <textarea name="text"></textarea>';
echo ' <button type="submit">Добавить</button>';
echo '</form>';
echo '<br>';

foreach ($news->getData() as $record){
    echo '<a href='.'/7/article.php?id='.$record->getId().'><h1>'.$record->getTitle().'</h1></a>';
    echo $record->getText();
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