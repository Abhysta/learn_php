<?php

namespace Entity;

class TodoListEntity
{

    public string $todo;


    public function __construct(string $todo = "")
    {
        $this->todo = $todo;
    }


    public function getTodo()
    {
        return $this->todo;
    }

    public function setTodo(string $todo)
    {
        $this->todo = $todo;
    }
}
