<?php

$date = new DateTime();
$date->setDate(2020, 1, 1);
$date->setTime(1, 1, 1);

$date->add(new DateInterval("P1Y"));

$dateInterval = new DateInterval("P1M");
$dateInterval->invert = 1;

$date->add($dateInterval);

$date->setTimezone(new DateTimeZone("Asia/Jakarta"));

echo $date->format("Y-m-d H:i:s") . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d", "2020-01-01", new DateTimeZone("Asia/Jakarta"));

var_dump($date);
