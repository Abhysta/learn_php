<?php

session_start();

if ($_SESSION["login"] == true) {
    $say = "Hello " . $_SESSION["username"];
} else {
    header("Location: 11-session.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Selamat Datang</h1>
    <a href="logout.php">logout</a>
</body>

</html>