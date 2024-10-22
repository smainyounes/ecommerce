<?php 

include dirname(dirname(dirname(__FILE__)))."/backend/helpers/helpers.php";

spl_autoload_register("myloader");

function myloader($class_name) 
{
    $filename = str_replace('_', DIRECTORY_SEPARATOR, strtolower($class_name)).'.class.php';

    $file = dirname(dirname(dirname(__FILE__)))."/backend/".$filename;

    if ( ! file_exists($file))
    {
        return FALSE;
    }
    include $file;
}
?>