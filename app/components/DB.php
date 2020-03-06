<?php

declare(strict_types=1);

namespace components;

use PDO;

/**
 * Class DB
 * @package components
 */
class DB
{
    /**
     * @var PDO|null
     */
    private ?PDO $connection;

    /**
     * DB constructor.
     * @param string $host
     * @param string $user
     * @param string $password
     * @param string $db
     */
    public function __construct(string $host, string $user, string $password, string $db)
    {
        $this->connection = new PDO("mysql:host={$host};port=3306;dbname={$db}", $user, $password);
    }

    /**
     * @return PDO
     */
    public function getConnection() : PDO
    {
        return $this->connection;
    }

    public function __destruct()
    {
        $this->connection = null;
    }
}
