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
        $lines = file($this->path.'news.txt', FILE_IGNORE_NEW_LINES);
        foreach ($lines as $key => $line){
            $record = new Article($key, $line);
            if(file_exists($this->path.$key.'.txt')) {
                $record->setText(file_get_contents($this->path . $key . '.txt'));
            };
            $this->data[] = $record;
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
        foreach ($this->data as $key => $record){
            $lines[] = $record->getTitle();
            file_put_contents($this->path.$key.'.txt', $record->getText());
        }
        file_put_contents($this->path.'news.txt', implode("\n", $lines));
        return $this;
    }

}