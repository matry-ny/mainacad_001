<?php

namespace components;

use models\User;
use PDO;

/**
 * Class AbstractModel
 * @package components
 */
abstract class AbstractModel
{
    /**
     * @return string
     */
    protected abstract function tableName() : string;

    /**
     * @return PDO
     */
    public function getDB() : PDO
    {
        return App::getInstance()->db->getConnection();
    }

    /**
     * @param array $conditions
     * @param string $glue
     * @return static|null
     */
    public static function findOne(array $conditions = [], string $glue = 'AND') : ?self
    {
        $model = new static();

        $sql = "SELECT * FROM `{$model->tableName()}`";

        $where = [];
        foreach (array_keys($conditions) as $key) {
            $where[] = "`{$key}` = :{$key}";
        }
        if ($where) {
            $sql .= ' WHERE ' . implode(" {$glue} ", $where);
        }

        $sql .= ' LIMIT 1';

        $statement = $model->getDB()->prepare($sql);

        foreach ($conditions as $key => $value) {
            $statement->bindValue(":{$key}", $value);
        }

        $statement->execute();

        return $statement->fetchObject(static::class) ?: null;
    }
}
