<?php

error_reporting(E_ALL);

use components\App;

require_once __DIR__ . '/autoload.php';

$config = require __DIR__ . '/configs/app.php';

try {
    echo (new App($config))->run();
} catch (Exception $exception) {
    exit($exception->getMessage());
}
