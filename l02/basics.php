<?php

define('MY_CONST', 123321);

/**
 * Class Test
 * Class for PHP basics demonstration
 *
 * @method qwerty(int $p1, string $p2)
 */
class TestMainAcad
{
    public function __construct()
    {
        $name = 'Dmytro';
        $html = <<<HTML
<h1>ddsadasdas</h1>
<p>Hello {$name}</p>
HTML;
        echo $html, PHP_EOL;
        echo __CLASS__, PHP_EOL, MY_CONST, PHP_EOL;
        echo PHP_INT_MAX, PHP_EOL;

        echo 'Steve Jobs said: "I\'lllearn PHP"', PHP_EOL;
    }
}

$test = new TestMainAcad();
//$test->qwerty(1, 'www');


/*
<?php
$name = 'Dmytro';
?>

<h1>ddsadasdas</h1>
<p>Hello <?= $name ?></p>
*/