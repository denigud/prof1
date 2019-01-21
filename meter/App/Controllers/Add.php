<?php

namespace App\Controllers;


use App\Controller;
use App\Models\Meters\Reading;

class Add extends Controller
{

    protected function handle()
    {
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

        header('Location: /');
        exit;

    }

}