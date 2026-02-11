<?php

class MathHelper
{
    static public string $name = "MathHelper";

    static function sum(int ...$values): int
    {
        $total = 0;

        foreach ($values as $numbers) {
            $total += $numbers;
        }

        return $total;
    }

    //contoh akses static di dalam function lain seperti const
    function sayHello() {
        echo "Hello " . self::$name;
    }
}

echo MathHelper::$name . PHP_EOL;

$total = MathHelper::sum(1, 2, 3, 4, 5, 6, 7);
echo $total . PHP_EOL;

$hello = new MathHelper();
echo $hello->sayHello();