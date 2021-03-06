<?php


spl_autoload_extensions(".php");

function autoload_classes($className) {
    $fileName = __DIR__ . '/' . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';

    if(file_exists($fileName)) {
        require $fileName;
    } else {
        throw new Exception('Failed to include class: '. $className);
    }
}

//
//function __autoload($class)
//{
//    require __DIR__ . '/' .str_replace('\\', '/', $class) . '.php';
//}


spl_autoload_register('autoload_classes');
