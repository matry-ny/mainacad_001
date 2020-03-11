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
            $roleId = $this->getDB()->lastInsertId();
            $this->refreshPermissions($roleId, $permissions);

            $this->getDB()->commit();

            return true;
        } catch(PDOException $exception) {
            $this->getDB()->rollback();
        }

        return false;
    }

    /**
     * @param int $roleId
     * @param array $permissions
     * @return bool
     */
    private function refreshPermissions(int $roleId, array $permissions) : bool
    {
        $rows = [];
        foreach ($permissions as $permissionId) {
            $rows[] = "({$roleId}, {$permissionId})";
        }

        $sql = 'INSERT INTO `role_to_permission` (`role_id`, `permission_id`) VALUES ' . implode(', ', $rows);
        $statement = $this->getDB()->prepare($sql);

        return $this->execute($statement);
    }
}