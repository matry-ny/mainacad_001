<?php

require_once __DIR__ . '/../library.php';

$array = [
    123,
    2313,
    'sssss',
    555
];

printArray($array);

$arrayLength = count($array);
for ($i = 0; $i < $arrayLength; $i++) {
    printLine("{$i}: {$array[$i]}");
}

$data = [
    [
        'data' => 'pack 01',
        'hasNextPage' => true,
    ],
    [
        'data' => 'pack 03',
        'hasNextPage' => true,
    ],
    [
        'data' => 'pack 04',
        'hasNextPage' => true,
    ],
    [
        'data' => 'pack 05',
        'hasNextPage' => true,
    ],
    [
        'data' => 'pack 06',
        'hasNextPage' => true,
    ],
    [
        'data' => 'pack 07',
        'hasNextPage' => true,
    ],
    [
        'data' => 'pack 08',
        'hasNextPage' => true,
    ],
    [
        'data' => 'pack 09',
        'hasNextPage' => true,
    ],
    [
        'data' => 'pack 10',
        'hasNextPage' => true,
    ],
    [
        'data' => 'pack 11',
        'hasNextPage' => false,
    ],
    [
        'data' => 'pack 12',
        'hasNextPage' => false,
    ],
];

printArray($data);

$checkData = true;
while ($checkData) {
    $row = array_shift($data);
    printLine($row['data']);

    $checkData = $row['hasNextPage'];
}
