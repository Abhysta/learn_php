<?php

require_once "connection/db-connection.php";

$connection = getConnection();

$username = "aby";
$password = "aby";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$result = $connection->prepare($sql);
$result->execute([$username, $password]);

//mengambil semua data
//var_dump($result->fetchAll());

//mengambil data satu-satu balikannya boolean
if ($row = $result->fetch()) {
    echo "Berhasil Login " . $row["username"] . PHP_EOL;
} else {
    echo "Gagal Login";
}

var_dump($result->fetch());
$connection = null;
