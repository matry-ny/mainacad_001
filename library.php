<?php

error_reporting(E_ALL);

/**
 * @param array $array
 */
function printArray(array $array) : void
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

/**
 * @param string $string
 */
function printLine(string $string) : void
{
    echo "{$string}<br>";
}
