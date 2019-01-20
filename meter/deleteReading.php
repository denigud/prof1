<?php

use App\Models\Meters\Reading;

require __DIR__ . '/App/autoload.php';

Reading::delete($_GET['id']);

header('Location: /meter/');
exit;


