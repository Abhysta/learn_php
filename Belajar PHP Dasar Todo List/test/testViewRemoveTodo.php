<?php

require_once "view/viewRemoveTodoList.php";
require_once "BusinessLogic/showTodoList.php";
require_once "BusinessLogic/addTodoList.php";

addTodoList("Aby");
addTodoList("Huda");
addTodoList("Arrofif");

showTodoList();

viewRemoveTodoList();

showTodoList();
