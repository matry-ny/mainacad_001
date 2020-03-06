<?php

namespace models;

use components\AbstractModel;
use components\App;
use PDO;

/**
 * Class User
 * @package models
 *
 * @property int id
 * @property string login
 * @property string password
 * @property string directory
 */
class User extends AbstractModel
{
    /**
     * @return string
     */
    protected function tableName(): string
    {
        return 'users';
    }

    /**
     * @var bool
     */
    public bool $isGuest = true;

    /**
     * @param string $login
     * @param string $password
     * @return bool
     */
    public function login(string $login, string $password) : bool
    {
        $user = self::findOne(['login' => $login]);

        if (!$user || !password_verify($password, $user->password)) {
            return false;
        }

        $user->isGuest = false;

        App::getInstance()->setUser($user);

        return true;
    }

    public function signOut()
    {
        App::getInstance()->setUser(new self());
    }
}