<?php

//echo (new DateTime('now', new DateTimeZone('Europe/Kiev')))->format('Y-m-d H:i:s T');
echo date('Y-m-d H:i:s T');
echo nl2br(PHP_EOL);
echo mt_rand();

echo nl2br(PHP_EOL);

function printGreeting(string $name) : void
{
    echo "Hello, dear {$name}", nl2br(PHP_EOL);
}

if (!function_exists('printGreeting')) {
    function printGreeting(string $name) : void
    {
        echo "Hello, dear {$name}", nl2br(PHP_EOL);
    }
}

printGreeting('Dime');
printGreeting('Igor');
printGreeting('Max');
printGreeting('Serg');
printGreeting('Igor');
