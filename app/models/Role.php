<?php

namespace models;

use components\AbstractModel;
use PDOException;

/**
 * Class User
 * @package models
 *
 * @property int id
 * @property string title
 */
class Role extends AbstractModel
{
    /**
     * @return string
     */
    protected function tableName(): string
    {
        return 'roles';
    }

    /**
     * @param array $data
     * @return bool
     */
    public function insert(array $data): bool
    {
        try {
            $permissions = $data['permissions'];
            unset($data['permissions']);

            $this->getDB()->beginTransaction();
            parent::insert($data);
            $this->getDB()->commit();

            $roleId = $this->getDB()->lastInsertId();
            return self::refreshPermissions($roleId, $permissions);
        } catch(PDOException $exception) {
            $this->getDB()->rollback();
        }

        return false;
    }

    private static function refreshPermissions(int $roleId, array $permissions) : bool
    {
        $role = self::findOne(['id' => $roleId]);
        var_dump($roleId, $role);exit;
        return true;
    }
}