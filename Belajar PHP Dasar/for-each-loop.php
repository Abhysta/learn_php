<?php

$names = ["Abhysta", "Huda", "Arrofif", 22];

//tanpa foreach
for ($i = 0; $i < count($names); $i++) {
    echo "Hello " . $names[$i] . PHP_EOL;
}

//dengan foreach
foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}

$persons = [
    "first_name" => "Abhysta",
    "middle_name" => "Huda",
    "last_name" => "Arrofif"
];

//kode untuk mengambil key dan value nya
foreach ($persons as $person => $val) {
    echo "$person : $val" . PHP_EOL;
}
