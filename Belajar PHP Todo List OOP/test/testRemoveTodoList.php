<?php

require_once "Repository/TodoListRepository.php";
require_once "Service/TodoListService.php";

use Repository\TodoListRepositiryImpl;
use Service\TodoListServiceImpl;


function removeTodo()
{

    $todoListRepo = new TodoListRepositiryImpl();
    $service = new TodoListServiceImpl($todoListRepo);

    $service->AddTodoList("Belajar 1");
    $service->AddTodoList("Belajar 2");
    $service->AddTodoList("Belajar 3");

    $service->removeTodoList(4);

    $service->showTodoList();
}

removeTodo();
