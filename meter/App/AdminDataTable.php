<?php

namespace App;


class AdminDataTable extends Controller
{


    protected $models = [];
    protected $functions = [];

    protected function handle()
    {

    }

    public function __construct($models, $functions)
    {
        $this->models = $models;
        $this->functions = $functions;
    }

    public function render($templates)
    {
        $this->view->models = $this->models;
        $this->view->functions = $this->functions;

        $this->view->render($templates);

    }

}