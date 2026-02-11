<?php

$host = "localhost";
$port = 3306;
$databases = "belajar_php_databases";
$username = "root";
$password = "abhysta19";


try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$databases", $username, $password);

    echo "Sukses";

    $connection = null;
} catch (PDOException $exception) {
    echo "Error " . $exception->getMessage() . PHP_EOL;
}
