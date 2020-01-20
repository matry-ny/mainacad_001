<?php

error_reporting(E_ALL & ~E_NOTICE);

$string = 'test 123321 qqqq222';
$int = (int)$string;
$null = null;

var_dump(0 > null, 0 == null, 0 >= null);

var_dump(is_float($int), is_int($int));

var_dump(isset($var1), empty($int), gettype($string), isset($null));

var_dump(empty('0'), strlen('0'));

var_dump($GLOBALS);

var_dump($int);
$GLOBALS['int'] = 123;
var_dump($int);

//var_dump($_ENV);

var_dump(4 % 2);

var_dump($tttty);

define('MY_CONST', 123);
define('MY_CONST', 321);

//require_once 'tet.tt';

var_dump(MY_CONST, 1/0);

var_dump(6 % 4);

$var1 = 3;
$var1++;
$var1++;
$var1--;
--$var1;

var_dump($var1);

$var2 = 4;
var_dump($var2++ + $var2++);
//         4           5
var_dump($var2++ + $var2++);
//        6         7
var_dump($var2);

$name = 'Dima';
$age = 30;
var_dump('My name is ' . $name . ' and my age is ' . $age);
var_dump("My name is {$name} and my age is {$age}");

$var3 = 33;
$var3 -= 5;
var_dump($var3);