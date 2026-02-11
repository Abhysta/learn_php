<?php
require_once "BusinessLogic/addTodoList.php";
require_once "helper/input.php";

function viewAddTodoList()
{
    echo "Menambah Todo" . PHP_EOL;

    $todo = inputString("Masukkan Todo (x Untuk Batal)");

    if ($todo === "x" or $todo === "X") {
        echo "Batal Menambah Data" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
