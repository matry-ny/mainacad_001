<?php

namespace models;

use components\App;

/**
 * Class User
 * @package models
 */
class User
{
    /**
     * @var bool
     */
    public bool $isGuest = true;

    /**
     * @var string
     */
    public string $login = '';

    /**
     * @var string
     */
    public string $accountHash = 'c4ca4238a0b923820dcc509a6f75849b';

    /**
     * @param string $login
     * @param string $password
     * @return bool
     */
    public function login(string $login, string $password) : bool
    {
        $users = App::getInstance()->config['users'];
        if (!array_key_exists($login, $users)) {
            return false;
        }

        if (!password_verify($password, $users[$login])) {
            return false;
        }

        $this->login = $login;
        $this->isGuest = false;

        App::getInstance()->setUser($this);

        return true;
    }

    public function signOut()
    {
        App::getInstance()->setUser(new self());
    }
}