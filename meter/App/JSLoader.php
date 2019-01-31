<?php

namespace App;


class JSLoader
{
    public function __construct()
    {
        // FOR JAVASCRIPT FILES
        $js = '';

        foreach (glob('js/*.js') as $file){
            $js .= '<script src="/' . $file . '" type="text/javascript"></script>' . "\n";
        }

        echo $js;
    }
}