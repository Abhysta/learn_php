<?php

class Product
{
    public function __construct(public string $id, public string $name, private int $stock = 0)
    {
    }
}

$product = new Product("1", "Bola");
echo $product->name;
