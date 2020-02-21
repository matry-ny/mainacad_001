<?php

declare(strict_types=1);

namespace components;

use models\User;

/**
 * Class App
 * @package components
 */
class App
{
    /**
     * @var array
     */
    public static array $config;

    /**
     * @var Request
     */
    public static Request $request;

    /**
     * @var View
     */
    public static View $view;

    /**
     * @var User
     */
    public static User $user;

    /**
     * App constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        self::$config = $config;
        self::$request = new Request($_SERVER['REQUEST_URI']);
        self::$view = new View(self::$config['viewsDir']);
        self::$user = new User();
    }

    /**
     * @return mixed
     */
    public function run()
    {
        return (new Dispatcher())->dispatch();
    }

    /**
     * Format: $this->getParam('users.nik.id')
     *
     * @param string $param
     * @param null $default
     * @return mixed
     */
    public function getParam(string $param, $default = null)
    {
        return self::$config['users']['nik']['id'];
    }
}
