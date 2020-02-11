<?php

/**
 * Class ClassLoader
 */
class ClassLoader
{
    /**
     * @param string $class
     * @throws Exception
     */
    public function load(string $class) : void
    {
        $file = __DIR__ . '/' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
        if (!file_exists($file)) {
            exit("Class {$class} can not be loaded");
        }

        require_once $file;
    }
}
