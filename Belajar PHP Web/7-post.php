<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>Email</td>
            <td><?= $_POST["email"] ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?= $_POST["password"] ?></td>
        </tr>
    </table>
</body>

</html>