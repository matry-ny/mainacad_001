<?php

use components\App;

require_once __DIR__ . '/autoload.php';

try {
    echo (new App())->run();
} catch (Exception $exception) {
    exit($exception->getMessage());
}
