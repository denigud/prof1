<?php

namespace App\Controllers;


use App\Controller;
use App\Models\Meters\Meter;
use App\Models\Meters\Reading;

class Index extends Controller
{

    protected function handle()
    {

        /*foreach (Meter::getEachData() as $meter){
            echo '<pre>';
            var_dump($meter);
            echo '</pre>';
        }*/
        $this->view->meters = Meter::getAllData();
        $this->view->meterReading = Reading::getAllData();
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }

}