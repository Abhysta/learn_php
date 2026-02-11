<?php

use Helper\Input;
use Repository\TodoListRepository;
use Service\TodoListService;

class ViewTodoList
{

    private TodoListService $todoService;

    public function __construct(TodoListService $todo)
    {
        $this->todoService = $todo;
    }

    public function viewTodoList()
    {
        while (true) {

            $this->todoService->showTodoList();

            echo "Tentukan Pilihan" . PHP_EOL;
            echo "1 Menambah Data" . PHP_EOL;
            echo "2 Menghapus Data" . PHP_EOL;
            echo "X Untuk Batal" . PHP_EOL;

            $pilihan = Input::inputString("Pilihan");

            if ($pilihan == "1") {
                $this->addTodoList();
            } else if ($pilihan == "2") {
                $this->removeTodoList();
            } else if ($pilihan == "x") {
                break;
            } else {
                echo "Pilihan Tidak Ada" . PHP_EOL;
            }
        }
    }

    function addTodoList()
    {
        echo "Menambah Data" . PHP_EOL;

        $pilihan = Input::inputString("Masukkan Data");

        if ($pilihan == "x") {
            echo "Batal Menambah Data" . PHP_EOL;
        } else {
            $this->todoService->AddTodoList($pilihan);
        }
    }

    function removeTodoList()
    {
        echo "Menghapus Data" . PHP_EOL;

        $pilihan = Input::inputString("Masukkan Indexnya");

        if ($pilihan == "x") {
            echo "Batal Menambah Data" . PHP_EOL;
        } else {
            $this->todoService->removeTodoList($pilihan);
        }
    }
}
