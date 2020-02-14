<?php

require_once __DIR__ . '/autoload.php';

$request = new \components\Request($_SERVER['REQUEST_URI']);
var_dump($request);
