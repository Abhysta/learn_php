<?php

class PersonDestructor {
    var $name = "Abhysta";
    function __destruct() {
     echo "Object person {$this->name} di hapus" . PHP_EOL;
    }
}

$person = new PersonDestructor();
$person->name = "Huda";

echo "Program selesai" . PHP_EOL;