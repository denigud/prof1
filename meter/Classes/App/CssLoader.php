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
                        $css .= '<link rel="stylesheet" href="css/' . $file .
                            '" type="text/css" media="all" />' . "\n";
                    }
                }
                closedir($handle);
                echo $css;
            }

    }
}