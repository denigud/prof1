<?php

namespace App\Controllers;


use App\Controller;
use App\Models\Meters\Meter;
use App\Models\Meters\Reading;

class Index extends Controller
{

    protected function handle()
    {
        $this->view->meters = Meter::getAllData();
        $this->view->meterReading = Reading::getAllData();
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }

}