<?php
/**
 * Created by PhpStorm.
 * User: Gudz.DO
 * Date: 10.01.2019
 * Time: 13:24
 */

namespace TextFile;


class TextFile
{
    public function readFile($file)
    {
        return file($file, FILE_IGNORE_NEW_LINES);
    }

    /**
     * @param array|bool $data
     */
    public function save($file, $data)
    {
        file_put_contents($file, implode("\n", $data));
    }
}