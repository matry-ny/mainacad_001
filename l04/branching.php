<?php

$test = (int)$_GET['test'];
if ($test === 0) {
    echo 'ZERO';
} elseif ($test === 1) {
    echo 'ONE';
} elseif ($test === 2) {
    echo 'TWO';
} elseif ($test === 3) {
    echo 'THREE';
} elseif ($test % 2 === 0) {
    echo 'Is EVEN';
} else {
    echo 'Is ODD';
}

echo nl2br(PHP_EOL);

echo $test % 2 === 0 ? 'Is EVEN' : 'Is ODD';

// Do not do this. EVER.
//echo $test === 0 ? 'ZERO' : ($test === 1 ? 'ONE' : ($test === 2 ? 'TWO' : ($test % 2 === 0 ? 'Is EVEN' : 'Is ODD')));

echo nl2br(PHP_EOL);

$t = $test ?: 'undefined';
var_dump($t);

echo nl2br(PHP_EOL);

switch ($test) {
    case 0:
        echo 'ZERO';
        break;
    case 1:
        echo 'ONE';
        break;
    case 2:
        echo 'TWO';
        break;
    case 3:
        echo 'THREE';
        break;
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
    case 10:
        echo '5 - 10';
        break;
    case $test % 2 === 0:
        echo 'Is EVEN';
        break;
    default:
        echo 'Is ODD';
}
