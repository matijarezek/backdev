<?php

namespace App\Models;

use PDO;

class Model
{
    private static ?Model $instance = null;
    protected PDO $connection;

    private function __construct()
    {
        $this->connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
        if ($this->connection->getAttribute(PDO::ATTR_CONNECTION_STATUS) === PDO::ERR_NONE) {
            echo "Database connection successful!";
        } else {
            echo "Database connection failed.";
        }
    }

    public static function getInstance(): Model
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}