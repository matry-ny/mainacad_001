<?php

require_once __DIR__ . '/../library.php';

$stack = [1, 3, 4, 5, 6, 8, 10, 'test' => 123];
do {
    $number = mt_rand(1, 10);
    printLine(">>> {$number}");
} while (in_array($number, $stack));

printArray($stack);
printLine($number);

foreach ($stack as $key => $number) {
    printLine("{$key}: {$number}");
}
