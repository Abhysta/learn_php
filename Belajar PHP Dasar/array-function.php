<?php
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

var_dump(array_map(fn ($data) => $data * 2, $data));
var_dump(array_keys($data));
var_dump(array_values($data));

rsort($data);
var_dump($data);

sort($data);
var_dump($data);

shuffle($data);
var_dump($data);
