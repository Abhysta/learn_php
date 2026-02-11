<?php

require_once "connection/db-connection.php";

$connection = getConnection();

$sql = <<<SQL
INSERT INTO customers (id, name, email) VALUES ("aby", "aby", "aby@gmail.com")
SQL;

$connection->exec($sql);

$connection = null;
