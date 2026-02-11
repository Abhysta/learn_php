<?php

function inputString(string $info): string
{
    echo "$info : " . PHP_EOL;
    $result = fgets(STDIN);
    return trim($result);
}
