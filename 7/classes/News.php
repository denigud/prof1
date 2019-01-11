<?php
/**
 * Created by PhpStorm.
 * User: Gudz.DO
 * Date: 11.01.2019
 * Time: 15:16
 */

namespace News;

use Article\Article;

require_once __DIR__.'/Article.php';

class News
{

    protected $path;
    protected $data = [];

    public function __construct($path)
    {
        $this->path = $path;
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $key => $line){
            $this->data[] = new Article($key, $line);
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    public function append($record)
    {
        $this->data[] = $record;
        return $this;
    }

    public function save()
    {
        $lines = [];
        foreach ($this->data as $record){
            $lines[] = $record->getTitle();
        }
        file_put_contents($this->path, implode("\n", $lines));
        return $this;
    }

}