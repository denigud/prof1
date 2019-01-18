<?php
/**
 * Created by PhpStorm.
 * User: Gudz.DO
 * Date: 16.01.2019
 * Time: 17:53
 */

namespace App;


class CssLoader
{
    public function __construct()
    {
        echo '<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">';

        // FOR CSS FILES
        $css = '';
        $handle = '';
        $file = '';

        // open the "css" directory
        if ($handle = opendir('css')) {
            // list directory contents
            while (false !== ($file = readdir($handle))) {
                // only grab file names
                if (is_file('css/' . $file)) {
                    // insert HTML code for loading Javascript files
                    $css .= '<link href="css/' . $file .
                        '" rel="stylesheet" />' . "\n";
                }
            }
            closedir($handle);
            echo $css;
        }

    }
}