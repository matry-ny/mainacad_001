<?php

class Test
{
    private $qwerty;

    public function getQuerty()
    {
        return $this->qwerty;
    }

    public function setQwerty($qwerty)
    {
        $this->qwerty = $qwerty;
    }
}

$test = new Test();
$test->setQwerty(1123211);
var_dump($test->getQuerty());
