<?php


require_once "covariance-contravariance.php";
require_once "covariance.php";

use Data\AnimalFood;
use Data\Food;

$catShelter = new CatShelter();
$cat = $catShelter->adopt("cat");
$cat->eat(new AnimalFood());

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("dog");
$dog->eat(new Food());