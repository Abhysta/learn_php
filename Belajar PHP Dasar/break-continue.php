<?php

$counter = 1;

//break
while (true) {
    echo "Hello World : " . $counter . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}

//continue
for ($counter = 1; $counter < 10; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }
    echo "Counter : " . $counter . PHP_EOL;
}
