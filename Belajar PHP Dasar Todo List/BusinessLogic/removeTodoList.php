<?php

require_once "Model/TodoList.php";

function removeTodoList(int $number)
{
    global $todolist;


    if ($number > sizeof($todolist)) {
        echo "Data tidak ada di todo list" . PHP_EOL;
    } else {
        for ($i = $number; $i < sizeof($todolist); $i++) {
            $todolist[$i] = $todolist[$i + 1];
        }

        unset($todolist[sizeof($todolist)]);
    }
}
