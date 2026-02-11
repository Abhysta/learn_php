<?php

require_once "connection/db-connection.php";

$connection = getConnection();

$sql = "INSERT INTO comments (email, comment) VALUES ('aby@gmail.com', 'hi')";
$result = $connection->exec($sql);
$id = $connection->lastInsertId();

var_dump($result);
var_dump($id);

$connection = null;
