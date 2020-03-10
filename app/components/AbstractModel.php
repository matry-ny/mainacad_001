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
     * @return static[]
     */
    public static function findAll() : array
    {
        $model = new static();
        $sql = "SELECT * FROM `{$model->tableName()}` ORDER BY `id`";
        $statement = $model->getDB()->prepare($sql);
        $statement->execute();

        $result = [];
        while ($model = $statement->fetchObject(static::class)) {
            $result[] = $model;
        }

        return $result;
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

    /**
     * @param array $data
     * @return bool
     */
    public function insert(array $data) : bool
    {
        $fields = array_keys($data);
        $values = [];
        foreach ($fields as $field) {
            $values[] = ":{$field}";
        }

        $sql = sprintf(
            'INSERT INTO `%s` (`%s`) VALUES (%s)',
            $this->tableName(),
            implode('`, `', $fields),
            implode(', ', $values)
        );

        $statement = $this->getDB()->prepare($sql);
        foreach ($data as $key => $value) {
            $statement->bindValue(":{$key}", $value);
        }

        return $statement->execute();
    }

    /**
     * @param array $data
     * @return bool
     */
    public function update(array $data) : bool
    {
        $values = [];
        foreach (array_keys($data) as $field) {
            $values[] = "`{$field}` = :{$field}";
        }

        $sql = sprintf(
            'UPDATE `%s` SET %s WHERE `id` = :id LIMIT 1',
            $this->tableName(),
            implode(', ', $values)
        );

        $statement = $this->getDB()->prepare($sql);
        foreach ($data as $key => $value) {
            $statement->bindValue(":{$key}", $value);
        }
        $statement->bindValue(':id', $this->id);

        return $statement->execute();
    }

    /**
     * @return bool
     */
    public function delete() : bool
    {
        $sql = "DELETE FROM {$this->tableName()} WHERE id = :id LIMIT 1";
        $statement = $this->getDB()->prepare($sql);
        $statement->bindValue(':id', $this->id);

        return $statement->execute();
    }
}
