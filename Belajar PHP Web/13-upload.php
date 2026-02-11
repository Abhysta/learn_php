<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fileName = $_FILES["fileUp"]["name"];
    $fileType = $_FILES["fileUp"]["type"];
    $fileSize = $_FILES["fileUp"]["size"];
    $fileTemp = $_FILES["fileUp"]["tmp_name"];
    move_uploaded_file($fileTemp, __DIR__ . "/file/" . $fileName);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
        <table>
            <tr>
                <td>Nama File</td>
                <td><?= $fileName ?></td>
            </tr>
            <tr>
                <td>Nama File</td>
                <td><?= $fileType ?></td>
            </tr>
            <tr>
                <td>Nama File</td>
                <td><?= $fileSize ?></td>
            </tr>
            <tr>
                <td>Nama File</td>
                <td><?= $fileTemp ?></td>
            </tr>
        </table>
    <?php } ?>


    <form action="13-upload.php" method="post" enctype="multipart/form-data">
        <label for="file">File</label>
        <input type="file" name="fileUp" id="file">
        <input type="submit" value="Submit">
    </form>
</body>

</html>