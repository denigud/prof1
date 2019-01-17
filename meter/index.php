<?php

use App\Models\Meter\Meters;
use App\View;
use App\Models\DB;
require __DIR__ . '/autoload.php';

$meters = (new Meters())->getData();

$dbh = new DB();

$meterReading = $dbh->query('SELECT * FROM t_reading', ['']);

$view = new View();
$view->assign('meters', $meters);
$view->assign('meterReading', $meterReading);

$view->display(__DIR__ . '/templates/index.php');