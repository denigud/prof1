<?php
require_once __DIR__.'/classes/News.php';
require_once __DIR__.'/classes/Article.php';
use News\News;
use Article\Article;

$news = new News(__DIR__.'/data/data.txt');
$record = new Article(0, $_POST['record']);

$news->append($record);
$news->save();

header('Location: /7/');
exit;