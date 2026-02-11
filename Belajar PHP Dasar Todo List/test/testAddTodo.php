<?php

require_once "BusinessLogic/showTodoList.php";
require_once "BusinessLogic/addTodoList.php";

showTodoList();

addTodoList("Aby");
addTodoList("Huda");
addTodoList("AA");

showTodoList();
