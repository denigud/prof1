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

    public function assign(string $name, $value)
    {
        $this->data[$name] = $value;
        return $this;
    }

    public function display(string $template)
    {
        include $template;
    }

    public function render(string $template)
    {
        ob_start();

        include $template;

        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }

}