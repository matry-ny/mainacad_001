<?php

abstract class Parrent
{
    protected static $counter = 0;

    public function __construct()
    {
        self::$counter++;
    }

    abstract public function eyes() : string;

    abstract public function nose() : string;

    public function getNasledstvo() : string
    {
        return round(1000 / self::$counter, 2) . ' USD';
    }
}

class ChildOne extends Parrent
{
    public function eyes() : string
    {
        return 'GREEN';
    }

    public function nose() : string
    {
        return 'POTATO';
    }
}

class ChildTwo extends Parrent
{
    public function eyes() : string
    {
        return 'BLACK';
    }

    public function nose() : string
    {
        return 'LONG';
    }
}

class ChildThee extends Parrent
{
    public function eyes(): string
    {
        return 'RED';
    }

    public function nose(): string
    {
        return 'CURVE';
    }
}

$childOne = new ChildOne();
$childTwo = new ChildTwo();
$childThree = new ChildThee();

var_dump($childOne->eyes(), $childOne->nose(), $childOne->getNasledstvo());
var_dump($childTwo->eyes(), $childTwo->nose(), $childTwo->getNasledstvo());
var_dump($childThree->eyes(), $childThree->nose(), $childThree->getNasledstvo());




