<?php
/**
 * Created by PhpStorm.
 * User: Gudz.DO
 * Date: 11.01.2019
 * Time: 13:19
 */

namespace View;


class View
{

    protected $data=[];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
        return $this;
    }

    public function display($template)
    {
        echo $this->data[$template];
    }

    public function render($template)
    {
        include __DIR__.'/../templates/'.$template;
    }

}