<?php

require_once __DIR__ . '/../library.php';

$data = [
    [
        'firstName' => 'Игорь',
        'lastName' => 'Синяков',
        'age' => 40,
        'isActive' => true,
        'skills' => [
            'PHP' => '15%',
            'JS' => '5%'
        ]
    ],
    [
        'firstName' => 'Максим',
        'lastName' => 'Матвеенко',
        'age' => 28,
        'isActive' => true,
        'skills' => [
            'PHP' => '17%',
            'JS' => '5%'
        ]
    ],
    [
        'firstName' => 'Игорь',
        'lastName' => 'Сарнавский',
        'age' => 28,
        'isActive' => true,
        'skills' => [
            'PHP' => '19%',
            'JS' => '5%'
        ]
    ],
    [
        'firstName' => 'Сергей',
        'lastName' => 'Поляков',
        'age' => 30,
        'isActive' => true,
        'skills' => [
            'PHP' => '21%',
            'JS' => '5%'
        ]
    ],
    [
        'firstName' => 'Антон',
        'lastName' => '--',
        'age' => 20,
        'isActive' => false,
        'skills' => [
            'PHP' => '0%',
            'JS' => '0%'
        ]
    ],
];

//unset($data[4]);

$data[] = [
    'firstName' => 'Олег',
    'lastName' => 'Шнуренко',
    'age' => 46,
    'isActive' => true,
    'skills' => [
        'PHP' => '50%',
        'JS' => '25%'
    ]
];

//$data[5] = 123;
//$data[2] = 'new value';
//$data['qwerty'] = 'some assoc value';
//$data[] = 22222;
//$data[] = 33333;

//$parts = array_filter(explode('/', '/products/list/view/2'));
//printArray($parts);

//array_push($data, 55555);
//array_unshift($data, 'Игорь');
//printLine(array_shift($data));
//printLine(array_shift($data));

usort($data, static function ($a, $b) {
    return $a['firstName'] <=> $b['firstName'];
});

$filteredData = array_filter($data, function ($item) {
    return $item['isActive'];
});

printArray($filteredData);

//printArray(array_pop($data));
//printArray(array_pop($data));
//printLine($data[2]['skills']['PHP']);
//
//$data[2]['skills']['PHP'] = '33%';
//$data[2]['skills']['HTML'] = '23%';
//
//printArray($data[2]['skills']);
