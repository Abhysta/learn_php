<?php

require_once "connection/db-connection.php";

$connection = getConnection();

$sql = "SELECT * FROM customers";

//return valuenya PDO Statement
//PDO statement turunan dari IteratorAggregate sehingga bisa lakukan foreach
$result = $connection->query($sql);

foreach ($result as $value) {
    echo $value["name"];
}

$connection = null;