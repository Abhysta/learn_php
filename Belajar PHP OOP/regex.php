<?php

$matches = [];
$result = preg_match_all("/aby|hud|arr/i", "Abhysta huda arrofif", $matches);

$replace = preg_replace("/anjing|bangsat/i", "***", "Anjing lu bangsat");

$split = preg_split("/,/", "Abhysta, Huda, Arrofif");

var_dump($result);
var_dump($matches);
var_dump($replace);
var_dump($split);
