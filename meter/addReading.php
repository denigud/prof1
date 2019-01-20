<?php

use App\Models\Meters\Reading;

require __DIR__ . '/App/autoload.php';

if(key_exists('id', $_POST)){
    $reading = Reading::findById($_POST['id']);
}else {
    $reading = new Reading;
}

foreach ($_POST as $key => $value){
    if('id' == $key){
        continue;
    };
    $reading->$key = $value;
}

$reading->save();

header('Location: /meter/');
exit;