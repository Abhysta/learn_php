<?php

class Data
{
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $fourth = "fourth";
}

$data = new Data();

foreach ($data as $key => $value) {
    echo "$key = $value" . PHP_EOL;
}

class Data2 implements IteratorAggregate
{
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $fourth = "fourth";

    public function getIterator(): Traversable
    {
        return new ArrayIterator([
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "fourth" => $this->fourth,
        ]);
    }
}

$data2 = new Data2();

foreach ($data2 as $key => $value) {
    echo "$key = $value" . PHP_EOL;
}