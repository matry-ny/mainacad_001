<?php

namespace models;

use components\AbstractModel;
use components\App;

/**
 * Class User
 * @package models
 *
 * @property int id
 * @property string title
 */
class Permission extends AbstractModel
{
    /**
     * @return string
     */
    protected function tableName(): string
    {
        return 'permissions';
    }
}