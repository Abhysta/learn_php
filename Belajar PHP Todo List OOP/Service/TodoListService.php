<?php


namespace Service;

require_once "Entity/TodoListEntity.php";

use Entity\TodoListEntity;
use Repository\TodoListRepository;

interface TodoListService
{
    public function showTodoList(): void;

    public function AddTodoList(string $todo): void;

    public function removeTodoList(int $number): void;
}

class TodoListServiceImpl implements TodoListService
{
    private TodoListRepository $todoListRepository;


    public function __construct(TodoListRepository $todolist)
    {
        $this->todoListRepository = $todolist;
    }


    public function showTodoList(): void
    {
        echo "TodoList" . PHP_EOL;
        $todo = $this->todoListRepository->findAll();
        foreach ($todo as $key => $value) {
            echo "$key " . $value->getTodo() . PHP_EOL;
        }
    }

    public function AddTodoList(string $todo): void
    {
        $todoEn = new TodoListEntity($todo);
        $this->todoListRepository->save($todoEn);
        echo "Berhasil Menambah Data" . PHP_EOL;
    }

    public function removeTodoList(int $number): void
    {
        if ($this->todoListRepository->remove($number)) {
            echo "Berhasil Menghapus Data";
        } else {
            echo "Gagal Menghapus Data";
        }
    }
}
