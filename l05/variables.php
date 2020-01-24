<?php

error_reporting(E_ALL);

$foo = 'foo';

require __DIR__ . '/variables2.php';

$func = function () {
    global $foo, $bar;

    $foo = 'foo2';
    $bar = 'bar2';

    unset($foo);

    var_dump($foo, $bar);
};

$func();

var_dump($foo, $bar);
