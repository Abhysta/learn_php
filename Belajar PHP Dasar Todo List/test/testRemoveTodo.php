<?php

require_once "BusinessLogic/showTodoList.php";
require_once "BusinessLogic/addTodoList.php";
require_once "BusinessLogic/removeTodoList.php";

addTodoList("Aby");
addTodoList("Huda");
addTodoList("Hudaaaaa");
addTodoList("Huda aja");
addTodoList("Arrofif");

showTodoList();

removeTodoList(1);

showTodoList();
