<?php

error_reporting(E_ALL);

$var1 = 'test 01';
$var2 = &$var1;

$var2 = 'test 02';
$var1 = 312312312321;

var_dump($var1, $var2);

echo nl2br(PHP_EOL);

var_dump(1 == $_GET['test'], 1 === $_GET['test'], 1 != $_GET['test'], 4 >= $_GET['test']);
$x = true;
if ($x == 1) {
    echo 1;
}
if ($x == 2) {
    echo 2;
}
if ($x == 3) {
    echo 3;
}

echo nl2br(PHP_EOL);

var_dump(4 < 5 && (3 <= 4 || 0 < -1));

$test = @(1 / 0);
var_dump($test);
