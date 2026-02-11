<?php

namespace Repository;

use Entity\TodoListEntity;

interface TodoListRepository
{
    public function save(TodoListEntity $todolist): void;

    public function remove(int $number): bool;

    public function findAll(): array;
}

class TodoListRepositiryImpl implements TodoListRepository
{
    public $todolist = array();

    public function save(TodoListEntity $todoListEntity): void
    {
        $size = sizeof($this->todolist) + 1;
        $this->todolist[$size] = $todoListEntity;
    }

    public function remove(int $number): bool
    {
        if ($number > sizeof($this->todolist)) {
            return false;
        } else {
            for ($i = $number; $i < sizeof($this->todolist); $i++) {
                $this->todolist[$i] = $this->todolist[$i + 1];
            };
            unset($this->todolist[sizeof($this->todolist)]);
            return true;
        }
    }

    public function findAll(): array
    {
        return $this->todolist;
    }
}
