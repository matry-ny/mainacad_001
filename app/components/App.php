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
    public array $config;

    /**
     * @var Request
     */
    public Request $request;

    /**
     * @var View
     */
    public View $view;

    /**
     * App constructor.
     */
    private function __construct()
    {
    }

    /**
     * @var App|null
     */
    private static ?App $instance = null;

    /**
     * @return App
     */
    public static function getInstance() : App
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @param array $config
     * @return mixed
     */
    public function run(array $config)
    {
        $this->startSession();

        $this->config = $config;
        $this->request = new Request($_SERVER['REQUEST_URI']);
        $this->view = new View($this->config['viewsDir']);

        return (new Dispatcher())->dispatch();
    }

    /**
     * ToDo: Homework
     * Format: $this->getParam('users.nik.id')
     *
     * @param string $param
     * @param null|mixed $default
     * @return mixed
     */
    public function getParam(string $param, $default = null)
    {
        return $this->config['users']['nik']['id'];
    }

    /**
     * @param User $user
     */
    public function setUser(User $user) : void
    {
        $_SESSION['user'] = $user;
    }

    /**
     * @return User
     */
    public function getUser() : User
    {
        if (!array_key_exists('user', $_SESSION)) {
            $_SESSION['user'] = new User();
        }

        return $_SESSION['user'];
    }

    /**
     * Checking existing session and create if not exists
     */
    private function startSession() : void
    {
        if (session_id()) {
            return;
        }

        session_start();
    }
}
