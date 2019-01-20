<?php
namespace App;

/**
 * Class View
 * @package App
 *
 * @property array $data
 */
class View
{

    protected $data=[];

    /**
     * @param string $template
     */
    public function display(string $template)
    {
        echo $this->render($template);
    }

    /**
     * @param string $template
     * @return string
     */
    public function render(string $template)
    {
        ob_start();

        include $template;

        $content = ob_get_contents();
        ob_end_clean();

        return $content;
    }

    /**
     * @param $name
     * @return mixed|null
     */
    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

}