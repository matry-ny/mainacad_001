<?php

class ParentClass
{
    public static function getName()
    {
        return static::class;
    }
}

class ChildClass extends ParentClass
{
}

class GrandSonClass extends ChildClass
{
}

var_dump(GrandSonClass::getName());

