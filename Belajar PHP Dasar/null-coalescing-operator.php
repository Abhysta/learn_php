<?php

$data = ["action" => "Fight"];

//tanpa null coalescing operator
if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = "Nothing";
}

echo "Action : " . $action . PHP_EOL;

//dengan null coalescing operator
$action = $data['action'] ?? "Nothing";
echo "Action : " . $action . PHP_EOL;