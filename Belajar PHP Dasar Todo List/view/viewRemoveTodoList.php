<?php

require_once "helper/input.php";
require_once "BusinessLogic/removeTodoList.php";

function viewRemoveTodoList()
{
    echo "Remove Todo List" . PHP_EOL;

    $pilihan = inputString("Masukkan Nomor Todo List yang Ingin Dihapus (x Untuk Batal)");

    if ($pilihan === "x" or $pilihan === "X") {
        echo "Batal Menghapus Data" . PHP_EOL;
    } else {
        removeTodoList($pilihan);
    }
}
