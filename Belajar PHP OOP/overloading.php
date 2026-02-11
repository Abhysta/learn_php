<?php

class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        echo "Access Properties $name" . PHP_EOL;
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        return $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        echo "Check Properties $name" . PHP_EOL;
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        echo "Unset Properties $name" . PHP_EOL;
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->name = "Aby";

echo $zero->name . PHP_EOL;
isset($zero->age);
unset($zero->name);

$zero->say("Hello", "World");
Zero::say("Hello", "World");
