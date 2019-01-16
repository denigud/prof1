<?php
/**
 * Created by PhpStorm.
 * User: Gudz.DO
 * Date: 16.01.2019
 * Time: 17:58
 */

namespace App;


class JSLoader
{
    public function __construct()
    {
        // FOR JAVASCRIPT FILES
        $js = '';
        $handle = '';
        $file = '';
        // open the "js" directory
        if ($handle = opendir('js')) {
            // list directory contents
            while (false !== ($file = readdir($handle))) {
                // only grab file names
                if (is_file('js/' . $file)) {
                    // insert HTML code for loading Javascript files
                    $js .= '<script src="js/' . $file . '" type="text/javascript"></script>' . "\n";
                }
            }
            closedir($handle);
            echo $js;
        }

    }
}