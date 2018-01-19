<?php

namespace siav\Lib;

class Database
{
    private static $connection;

    private function __construct() {}

    public static function GetConnection()
    {
        if (self::$connection === null)
        {
            try {
                self::$connection = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
            } catch (PDOException $e) {
                echo 'Database connection can not be established. Please try again later.' . '<br>';
                echo 'Error code: ' . $e->getCode();
                exit;
            }
        }
        return self::$connection;
    }
}

?>