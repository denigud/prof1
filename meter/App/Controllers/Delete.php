<?php

namespace App\Controllers;


use App\Controller;
use App\Models\Meters\Reading;

class Delete extends Controller
{

    protected function handle()
    {
        Reading::delete($_GET['id']);
        header('Location: /');
        exit;
    }

}