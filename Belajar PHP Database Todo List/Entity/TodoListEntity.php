<?php

namespace Entity;

class TodoListEntity
{

    private int $id;

    public string $todo;


    public function __construct(string $todo = "")
    {
        $this->todo = $todo;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getTodo(): string
    {
        return $this->todo;
    }

    public function setTodo(string $todo)
    {
        $this->todo = $todo;
    }
}
