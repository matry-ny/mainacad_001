<?php

interface Transportable
{
    public function move();
}

interface International
{
    public function getLanguage() : string;
}

class Bag implements Transportable, International
{
    public function move()
    {
        echo 'Bas is moved<br>';
    }

    public function getLanguage(): string
    {
        return 'en-US';
    }
}

$class = 'Bag';
$object = new $class;

if ($object instanceof Transportable) {
    $object->move();
    $object->move();
    $object->move();
}

if ($object instanceof International) {
    var_dump($object->getLanguage());
}
