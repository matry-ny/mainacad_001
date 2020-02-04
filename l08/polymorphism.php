<?php

require_once __DIR__ . '/Output.php';
require_once __DIR__ . '/HtmlOutput.php';
require_once __DIR__ . '/ApiOutput.php';

$data = [
    [
        'firstName' => 'Игорь',
        'lastName' => 'Синяков',
        'age' => 40,
        'isActive' => true,
    ],
    [
        'firstName' => 'Максим',
        'lastName' => 'Матвеенко',
        'age' => 28,
        'isActive' => true,
    ],
    [
        'firstName' => 'Игорь',
        'lastName' => 'Сарнавский',
        'age' => 28,
        'isActive' => true,
    ],
    [
        'firstName' => 'Сергей',
        'lastName' => 'Поляков',
        'age' => 30,
        'isActive' => true,
    ],
    [
        'firstName' => 'Олег',
        'lastName' => 'Шнуренко',
        'age' => 46,
        'isActive' => true,
    ],
];

(new HtmlOutput())->render($data);
(new ApiOutput())->render($data);
