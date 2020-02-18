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
     * @var View
     */
    public static View $view;

    /**
     * Router constructor.
     */
    public function __construct()
    {
        self::$request = new Request($_SERVER['REQUEST_URI']);
        self::$view = new View(__DIR__ . '/../views/');
    }

    /**
     * @return mixed
     */
    public function run()
    {
        return (new Dispatcher())->dispatch();
    }
}
