<?php

header("author:aby");
header("content-type:application/json");

$client = $_SERVER["HTTP_CLIENT_NAME"];

echo "Hello " . $client;
