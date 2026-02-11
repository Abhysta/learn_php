<?php

class Category
{
    private string $name;
    private bool $expensive;

    public function getName(): string
    {
        return $this->name . PHP_EOL;
    }

    //validation
    public function setName(string $name): void
    {
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    public function isExpensive(): bool
    {
        return $this->expensive . PHP_EOL;
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}


$category = new Category();
//setter
$category->setName(" Gadget  ");
$category->setExpensive(true);

//getter
echo $category->getName();
echo $category->isExpensive();
