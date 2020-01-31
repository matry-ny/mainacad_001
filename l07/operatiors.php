<?php

require_once __DIR__ . '/../library.php';

for ($col = 2; $col <= 10; $col++) {
    for ($row = 1; $row <= 10; $row++) {
        $result = $col * $row;
        printLine("{$col} x {$row} = {$result}");
//        if ($row > 5) {
//            break(2);
//        }
    }
    printLine('');
}

//for ($i = 0; $i < 100; $i++) {
//    if ($i % 5 !== 0) {
//        continue;
//    }
//
//    if ($i > 50) {
//        break;
//    }
//
//    printLine($i);
//}
