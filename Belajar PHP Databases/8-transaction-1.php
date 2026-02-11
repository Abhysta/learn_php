<?php

require_once "connection/db-connection.php";

$connection = getConnection();

//commit

$connection->beginTransaction();

$connection->exec("INSERT INTO comments (email, comment) VALUES ('aby@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('aby@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('aby@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('aby@gmail.com', 'hi')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('aby@gmail.com', 'hi')");

$connection->commit();

$connection = null;

//noted saat melakukan transaksi entah gagal atau berhasil id auto increment akan terus bertambah