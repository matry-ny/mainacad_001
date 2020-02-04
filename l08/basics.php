<?php

error_reporting(E_ALL);

class Machine
{
    protected $version;

    private $firmwareData = [
        'lastUpdate' => '2020-02-01',
        'access' => [
            'login' => 'password',
            'password' => 'login',
        ],
    ];

    public function getFirmvareData()
    {
        return $this->firmwareData;
    }
}

class Robot extends Machine
{
    public const IS_ALIVE = true;

    public $name;

    public function setVersion(float $version)
    {
        $this->version = $version;
    }

    public function say(string $phrase)
    {
        echo "{$this->name} says: {$phrase}", PHP_EOL;
        if (self::IS_ALIVE) {
            echo "{$this->name} is alive!!!", PHP_EOL;
        }
        echo PHP_EOL;
    }
}

$robik = new Robot();
$robik->name = 'Robik';
$robik->setVersion(1.0);
$robik->say('Hello');

var_dump($robik->getFirmvareData());

$bender = new Robot();
$bender->name = 'Bender';
$bender->setVersion(3.1);
$bender->say('Kill all humans');

var_dump($robik, $bender, Robot::IS_ALIVE);


