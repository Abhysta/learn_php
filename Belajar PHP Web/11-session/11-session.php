<?php
session_start();


if ($_SESSION["login"] == true) {
    header("Location: login.php");
    exit();
}

$_SESSION['login'] = false;

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["username"] != "" && $_POST["password"] != "") {
        $_SESSION["login"] = true;
        $_SESSION["username"] = "admin";
        header("Location: login.php");
        exit();
    } else {
        $error = "Username and Password Cant Null";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Post</title>
</head>

<body>
    <?php if ($error != "") { ?>
        <h1><?= $error ?></h1>
    <?php } ?>

    <form action="11-session.php" method="POST">
        <label for="username">username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Submit">
    </form>
</body>

</html>