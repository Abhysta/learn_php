<?php

if (isset($_GET["key"]) && $_GET["key"] == "rahasia") {
    header("Content-Disposition:attachment ; filename=Edit2 (1).jpg");
    header("Content-Type:image/jpg");
    readfile(__DIR__ . "/file/Edit2 (1).jpg");
    exit();
} else {
    echo "Invalid Link";
    exit();
}
