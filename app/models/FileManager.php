<?php

namespace models;

use components\App;

/**
 * Class FileManager
 * @package models
 */
class FileManager
{
    public function getDirectories(User $user, string $rout = '/')
    {
        // ToDo: Realize genarator
        $path = "{$this->getBaseDir()}{$user->accountHash}{$rout}";

        $content = array_filter(scandir($path), static function (string $item) {
            return !in_array($item, ['.', '..']);
        });
        var_dump($content);
    }

    /**
     * @return string
     */
    private function getBaseDir() : string
    {
        return App::$config['dataDir'];
    }
}
