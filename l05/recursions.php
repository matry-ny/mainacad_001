<?php

function power($number, $power)
{
    if ($power === 0) {
        return 1;
    }

    if ($power === 1) {
        return $number;
    }

    return $number * power($number, $power - 1);
}

var_dump(power(2, 3));

function fibonacci(int $number)
{
    if ($number === 0 || $number === 1) {
        return $number;
    }

    return fibonacci($number - 1) + fibonacci($number - 2);
}

var_dump(fibonacci(6));

function factorial($number)
{
    if ($number === 1) {
        return 1;
    }

    return $number + factorial($number - 1);
}

var_dump(factorial(5));
