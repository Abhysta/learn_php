<?php

$name = "Abhysta";
$name = null;

$isnull = is_null($name);
var_dump($isnull);

$value = "Aby";
unset($value);

var_dump(isset($value));

$value = "Aby";
var_dump(isset($value));