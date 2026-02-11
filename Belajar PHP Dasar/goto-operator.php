<?php

goto a;
echo "Hello A" . PHP_EOL;

a:
echo "Hello AA" . PHP_EOL;

$counter = 1;
while (true) :
    echo "Ini while masih berjalan" . PHP_EOL;
    $counter++;
    if ($counter > 10) {
        goto end;
    }
endwhile;

end:
echo "End Loop";
