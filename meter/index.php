<?php

use App\Models\Meter\Meters;
use App\Models\Reading\Readings;
use App\View;

require __DIR__ . '/autoload.php';

$view = new View();
$view->assign('meters', (new Meters())->getData());
$view->assign('meterReading', (new Readings())->getData());

$view->display(__DIR__ . '/templates/index.php');