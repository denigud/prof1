<?php
/**
 * Created by PhpStorm.
 * User: Gudz.DO
 * Date: 30.01.2019
 * Time: 16:18
 */

namespace App\Controllers;


use App\AdminDataTable;
use App\Controller;
use App\Models\Meters\Reading;

class Meter extends Controller
{

    protected function handle()
    {

        $AdminDataTable = new AdminDataTable(\App\Models\Meters\Meter::getAllData(), include __DIR__ . '/../AdminDataFunction.php');
        $AdminDataTable->render(__DIR__ . '/../../templates/Admin/meter.php');
    }

}