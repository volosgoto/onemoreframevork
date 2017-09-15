<?php

spl_autoload_extensions(".php");

function autoload_classes($className) {
    $fileName = __DIR__ . '/' . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    //var_dump($fileName) or Die();

    if(file_exists($fileName)) {
        require $fileName;
    } else {
        throw new Exception('Failed to include class: '.$className);
    }
}

//autoload_classes('Db');

spl_autoload_register('autoload_classes');
