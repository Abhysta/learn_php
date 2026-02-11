<?php

require_once "Model/TodoList.php";

function showTodoList()
{
    global $todolist;

    echo "Todo List" . PHP_EOL;

    foreach ($todolist as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
