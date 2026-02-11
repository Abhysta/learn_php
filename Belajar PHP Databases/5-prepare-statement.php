<?php

require_once "connection/db-connection.php";

$connection = getConnection();

//contoh sql injection
//$username = "admin'#";

//solusi gunakan function quote atau prepare
$username = "admin";
$password = "admin";

//untuk menggunakan prepare tambahkan :namaparameter

//$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
//cara menggunakan prepare statement cara 1
// $prepareStatement = $connection->prepare($sql);
// $prepareStatement->bindParam("username", $username);
// $prepareStatement->bindParam("password", $password);
// $prepareStatement->execute();

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
//cara 2 jika banyak parameter
// $prepareStatement = $connection->prepare($sql);
// $prepareStatement->bindParam(1, $username);
// $prepareStatement->bindParam(2, $password);
// $prepareStatement->execute();

//cara 3 lebih singkat
$prepareStatement = $connection->prepare($sql);
$prepareStatement->execute([$username, $password]);

$success = false;
$find_user = null;

foreach ($prepareStatement as $value) {
    $success = true;
    $find_user = $value["username"];
}

if ($success) {
    echo "Berhasil Login $find_user";
} else {
    echo "Gagal Login";
}


//contoh DML
$user = "aby";
$pw = "aby";

$value = "INSERT INTO admin (username, password) VALUES (?, ?)";
$result = $connection->prepare($value);
$result->bindParam(1, $user);
$result->bindParam(2, $pw);
$result->execute();


$connection = null;
