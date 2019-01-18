<?php

use App\Models\Reading\Reading;

require __DIR__ . '/autoload.php';

Reading::delete($_POST['id']);

header('Location: /meter/');
exit;


