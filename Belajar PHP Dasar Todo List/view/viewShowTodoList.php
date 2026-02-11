<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/showTodoList.php";
require_once "helper/input.php";
require_once "view/viewAddTodoList.php";
require_once "view/viewRemoveTodoList.php";

function viewShowTodoList()
{
    while (true) {

        global $todolist;

        echo "Todo List App" . PHP_EOL;

        showTodoList();

        echo "Menu" . PHP_EOL;
        echo "1 = Tambah" . PHP_EOL;
        echo "2 = Hapus" . PHP_EOL;
        echo "x = Selesai" . PHP_EOL;

        $pilihan = inputString("Masukkan Pilihan");

        if ($pilihan === "1") {
            viewAddTodoList();
        } elseif ($pilihan === "2") {
            viewRemoveTodoList();
        } elseif ($pilihan === "x" or $pilihan === "X") {
            break;
        } else {
            echo "Maaf Pilihan Tidak Ada";
        }
    }
}
