<?php

$nilai = 70;

switch ($nilai) {
    case 90:
        echo "Nilai anda A" . PHP_EOL;
        break;
    case 80:
        echo "Nilai anda B" . PHP_EOL;
        break;
    case 70:
        echo "Nilai anda C" . PHP_EOL;
        break;
    default:
        echo "Nilai anda D" . PHP_EOL;
        break;
}

$nilai = "B";

switch ($nilai) {
    case "A":
        echo "Anda Lulus Sangat Baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    default:
        echo "Anda Tidak Lulu" . PHP_EOL;
        break;
}


$nilai = "C";

switch ($nilai) :
    case "A":
        echo "Anda Lulus Sangat Baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    default:
        echo "Anda Tidak Lulu" . PHP_EOL;
        break;
endswitch;