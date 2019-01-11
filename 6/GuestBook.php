<?php

namespace GuestBook;
require_once ("TextFile.php");

use TextFile\TextFile;

class GuestBook extends TextFile
{
    private $data;

    public function __construct($file)
    {
        $this->data = $this->myReadFile($file);
    }

    /**
     * @return array|bool
     */
    public function getData()
    {
        return $this->data;
    }

    public function append($text)
    {
        $this->data[] = $text;
    }

}