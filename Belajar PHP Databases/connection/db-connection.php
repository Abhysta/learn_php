<?php

function getConnection(): PDO
{

    $host = "localhost";
    $port = 3306;
    $databases = "belajar_php_databases";
    $username = "root";
    $password = "abhysta19";

    return new PDO("mysql:host=$host:$port;dbname=$databases", $username, $password);
}
