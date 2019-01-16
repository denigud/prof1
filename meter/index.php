<?php

use App\View;
use App\Models\DB;
require __DIR__ . '/autoload.php';

$dbh = new DB();
$data = $dbh->query('SELECT * FROM meters', ['']);

$view = new View();
$view->assign('data', $data);

$view->display(__DIR__ . '/templates/index.php');