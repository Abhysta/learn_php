<?php

require_once "Repository/TodoListRepository.php";
require_once "Service/TodoListService.php";
require_once "Helper/inputHelper.php";
require_once "View/viewTodoList.php";
require_once "Entity/TodoListEntity.php";

use Repository\TodoListRepositiryImpl;
use Service\TodoListServiceImpl;

function viewRemoveTodo()
{
    $repo = new TodoListRepositiryImpl();
    $service = new TodoListServiceImpl($repo);
    $view = new ViewTodoList($service);

    $view->viewTodoList();
}

viewRemoveTodo();
