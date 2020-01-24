<?php

//declare(strict_types=1);

error_reporting(E_ALL);

//$func01 = 'var_dump';
//$func01(55555);

//echo '<br>';

function isAdult(int $age) : bool
{
    return $age >= 18;
}

function greeting(string $name, int $age, string $prefix = 'Hello! ') : void
{
    echo "{$prefix}{$name} ({$age} years old)!!!<br>";
}

$guestAge = (int)($_GET['age'] ?? 0);
$guestName = 'Dmyrto Kotenko';

if (isAdult($guestAge)) {
    greeting($guestName, $guestAge);
    greeting($guestName, $guestAge, 'TADA!!! ');
} else {
    echo 'RELOCATE', PHP_EOL;
//    header('Location: https://cleverkids.com.ua/');
//    exit;
}

/**
 * @param string $string
 */
function printLine(string $string) : void
{
    echo "{$string}<br>";
}

/**
 * @param array $array
 */
function printArray(array $array) : void
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function hashPassword(&$password) : void
{
    $password = md5($password);
}

$password = 123;
printLine($password);

hashPassword($password);
printLine($password);

preg_match_all('/\d+/', 'dasdasd123123123dsasda333nfbsdbf1  dsas111', $test);
printArray($test);

/**
 * @param string $prefix
 * @param mixed ...$numbers
 * @return string
 */
function sum(string $prefix, ...$numbers) : string
{
    // DEPRECATED
    //    printArray(func_get_args());
    //    printLine(func_get_arg(3));
    //
    //    printLine(array_sum(func_get_args()));

    printArray($numbers);
    return $prefix . array_sum($numbers);
}

sum('Sum of numbers is: ', 1, 3, 55, 66, 12321, 44, 2);

/**
 * @param int|float $number
 * @param int|float $power
 * @return int|float
 */
function power($number, $power)
{
    if ($number < 10) {
        return $number ** $power;
    }

    return 0;
}

$sumOfPowers = sum('Sum of powers is: ', power(3, 2), power(2, 5), power(4, 4), power(11, 1));
printLine($sumOfPowers);
