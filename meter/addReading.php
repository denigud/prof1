<?php

use App\Models\Reading\Reading;

require __DIR__ . '/autoload.php';

$reading = new Reading($_POST);
$reading->save();

header('Location: /meter/');
exit;