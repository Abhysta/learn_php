<?php

// include "./sample/myFunction.php";

// echo sayHello("Abhysta", "Huda");

//kode posisi salah
// echo sayHello("Abhysta", "Huda");
// include "./sample/myFunction.php";

//error redeclare
// include "sample/myFunction.php";
// include "sample/myFunction.php";

// echo sayHello("Abhysta", "Huda");

//mengatasi error redeclare
include_once "sample/myFunction.php";
include_once "sample/myFunction.php";

echo sayHello("Abhysta", "Huda");
