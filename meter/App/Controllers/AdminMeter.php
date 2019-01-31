<?php

namespace App\Controllers;


use App\AdminDataTable;
use App\Controller;

class AdminMeter extends Controller
{

    protected function handle()
    {
        $AdminDataTable = new AdminDataTable(\App\Models\Meters\Meter::getAllData(), include __DIR__ . '/../AdminDataFunction.php');
        $AdminDataTable->render(__DIR__ . '/../../templates/Admin/meter.php');
    }

}