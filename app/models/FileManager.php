<?php

namespace models;

use components\App;
use Generator;

/**
 * Class FileManager
 * @package models
 */
class FileManager
{
    /**
     * @var User
     */
    private User $user;

    /**
     * FileManager constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param string $rout
     * @return Generator
     */
    public function getDirectories(string $rout = '/') : Generator
    {
        $path = "{$this->getBaseDir()}{$rout}";
        foreach (scandir($path) as $item) {
            if (in_array($item, ['.', '..'])) {
                continue;
            }

            yield $item;
        }
    }

    /**
     * @param string $directoryName
     * @return bool
     */
    public function createDirectory(string $directoryName) : bool
    {
        $path = "{$this->getBaseDir()}/{$directoryName}";
        return is_dir($path) || mkdir($path);
    }

    /**
     * @param string $fileRout
     * @param string $fileName
     * @return bool
     */
    public function uploadFile(string $fileRout, string $fileName) : bool
    {
        $path = "{$this->getBaseDir()}/{$fileName}";
        return move_uploaded_file($fileRout, $path);
    }

    /**
     * @return string
     */
    private function getBaseDir() : string
    {
        return App::$config['dataDir'] . $this->user->accountHash;
    }
}
