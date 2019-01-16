<?php

use App\View;
use App\Models\DB;
require __DIR__ . '/autoload.php';

$dbh = new DB();
$data = $dbh->query('SELECT * FROM meters', ['']);

$meterReading = $dbh->query('SELECT * FROM t_reading', ['']);

$view = new View();
$view->assign('data', $data);
$view->assign('meterReading', $meterReading);

$view->display(__DIR__ . '/templates/index.php');