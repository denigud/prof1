<?php

namespace App;


class Config
{
    public $data = [];
    protected static $config;

    private function __construct()
    {
        $this->data['db'] = (include __DIR__ . '/configdb.php')['db'];
        return $this;
    }

    /**
     * @return mixed
     */
    public static function getConfig()
    {
        if(empty(Config::$config)){
            Config::$config  = new Config();
        }
        return Config::$config;
    }

}