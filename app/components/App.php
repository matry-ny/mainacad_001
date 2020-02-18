<?php

namespace components;

/**
 * Class App
 * @package components
 */
class App
{
    /**
     * @var Request
     */
    public static Request $request;

    /**
     * Router constructor.
     */
    public function __construct()
    {
        self::$request = new Request($_SERVER['REQUEST_URI']);
    }

    /**
     * @return mixed
     */
    public function run()
    {
        return (new Dispatcher())->dispatch();
    }
}
