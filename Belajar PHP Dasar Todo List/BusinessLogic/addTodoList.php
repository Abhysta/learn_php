<?php

require_once "Model/TodoList.php";

function addTodoList(string $value)
{
    global $todolist;

    $number = sizeof($todolist) + 1;
    $todolist[$number] = $value;
}
