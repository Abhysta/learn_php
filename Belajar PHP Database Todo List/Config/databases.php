<?php

class Database
{
    static function connection(): PDO
    {
        $localhost = "localhost";
        $port = 3306;
        $database = "belajar_php_databases";
        $username = "root";
        $password = "abhysta19";

        return new \PDO("mysql:host=$localhost:$port;dbname=$database", $username, $password);
    }
}
