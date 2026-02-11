<?php

trait A
{
    function doA()
    {
        echo "a" . PHP_EOL;
    }

    function doB()
    {
        echo "b" . PHP_EOL;
    }
}
trait B
{
    function doA()
    {
        echo "A" . PHP_EOL;
    }

    function doB()
    {
        echo "B" . PHP_EOL;
    }
}

class TraitConflict
{
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

$sample = new TraitConflict();
$sample->doA();
$sample->doB();
