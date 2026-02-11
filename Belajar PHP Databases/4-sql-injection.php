<?php

require_once "connection/db-connection.php";

$connection = getConnection();

//contoh sql injection
//$username = "admin'#";

//solusi gunakan function quote atau prepare
$username = $connection->quote("admin");
$password = $connection->quote("admin");

$sql = "SELECT * FROM admin WHERE username = $username AND password = $password";

echo $sql . PHP_EOL;

$result = $connection->query($sql);

$success = false;
$find_user = null;

foreach ($result as $value) {
    $success = true;
    $find_user = $value["username"];
}

if ($success) {
    echo "Berhasil Login $find_user";
} else {
    echo "Gagal Login";
}
