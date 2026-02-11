<?php

require_once "Repository/TodoListRepository.php";
require_once "Service/TodoListService.php";

use Repository\TodoListRepositiryImpl;
use Service\TodoListServiceImpl;


function showTodo()
{

    $todoListRepo = new TodoListRepositiryImpl();

    $todoListRepo->todolist[1] = "Belajar 1";
    $todoListRepo->todolist[2] = "Belajar 2";
    $todoListRepo->todolist[3] = "Belajar 3";

    $service = new TodoListServiceImpl($todoListRepo);

    $service->showTodoList();
}

showTodo();
