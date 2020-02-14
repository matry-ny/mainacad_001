<?php

spl_autoload_register(static function (string $class) {
    $file = __DIR__ . '/' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (!file_exists($file)) {
        exit("Class {$class} can not be loaded");
    }

    require_once $file;
});
