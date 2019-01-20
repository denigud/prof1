<?php

namespace App\Controllers;


use App\Controller;

class Reading extends Controller
{

    //protected function access(): bool
    //{
       // return isset($_GET['name']) && 'admin' == $_GET['name'];
    //}

    protected function handle()
    {
        $this->view->reading = \App\Models\Meters\Reading::findById($_GET['id']);
        $this->view->display(__DIR__ . '/../../templates/edit.php');
    }

}