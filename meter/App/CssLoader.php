<?php

namespace App;


class CssLoader
{
    public function __construct()
    {
        //echo '<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">';
        echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">';

        // FOR CSS FILES
        $css = '';

        foreach (glob('css/*.css') as $file){
            $css .= '<link href="' . $file . '" rel="stylesheet" />' . "\n";
        }

        echo $css;
    }
}