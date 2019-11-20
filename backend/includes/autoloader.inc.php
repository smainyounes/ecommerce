<?php 

spl_autoload_register("myloader");

function myloader($class_name) 
{
    $filename = str_replace('_', DIRECTORY_SEPARATOR, strtolower($class_name)).'.class.php';

    $file = $filename;

    if ( ! file_exists($file))
    {
        return FALSE;
    }
    include $file;
}
?>