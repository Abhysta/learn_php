<?php

class Student
{
    public string $id;
    public string $name;
    public int $age;

    public function __toString(): string
    {
        return "Student id : $this->id, name : $this->name, age : $this->age" . PHP_EOL;
    }

    public function __invoke(string $name, int $age, ...$other): void
    {
        $join = join(" ", $other);
        echo "Hello $name, age $age, $join" . PHP_EOL;
    }

    public function __debugInfo(): array
    {
        return ["id" => $this->id, "name" => $this->name, "age" => $this->age, "author" => "Aby"];
    }
}

$student1 = new Student();
$student1->id = "001";
$student1->name = "Abhysta";
$student1->age = 22;

echo $student1;
$array = ["java", "pekalongan"];
$student1("Aby", 22, ...$array);
$student1("Aby", 22, ...["java", "pekalongan"]);
$student1("Aby", 22, "java", "pekalongan");

var_dump($student1);
