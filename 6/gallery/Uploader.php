<?php
/**
 * Created by PhpStorm.
 * User: Gudz.DO
 * Date: 11.01.2019
 * Time: 10:02
 */

namespace Uploader;


class Uploader
{

    protected $inputName;

    public function __construct($inputName)
    {
        $this->inputName = $inputName;
    }

    public function isUploaded(){
        return 0 == $_FILES[$this->inputName]['error'];
    }

    public function upload(){
        move_uploaded_file(
            $_FILES[$this->inputName]['tmp_name'],
            __DIR__."/images/".$_FILES[$this->inputName]['name']
        );
    }

}