<?php

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
class NotBlank
{
}

#[\Attribute(\Attribute::TARGET_ALL)]
class Length
{
    var int $min;
    var int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

class LoginRequest
{
    #[NotBlank]
    #[Length(4, 10)]
    public string $username;

    #[NotBlank]
    #[Length(4, 10)]
    public string $password;
}

function validate(object $object): void
{

    $reflection = new ReflectionClass($object);
    $property = $reflection->getProperties();
    foreach ($property as $properties) {
        validateNotBlank($properties, $object);
        validateLength($properties, $object);
    }
}

function validateNotBlank(ReflectionProperty $reflection, object $object)
{
    $validate = $reflection->getAttributes(NotBlank::class);
    if (count($validate) > 0) {
        if (!$reflection->isInitialized($object)) {
            throw new Exception("Property $reflection->name is not initialized");
        }
        if ($reflection->getValue($object) == null) {
            throw new Exception("Properties can't null");
        }
    }
}

function validateLength(ReflectionProperty $reflection, object $object)
{
    if (!$reflection->isInitialized($object) | $reflection->getValue($object) == null) {
        return;
    }

    $attr = $reflection->getAttributes(Length::class);
    $value = $reflection->getValue($object);

    foreach ($attr as $attrs) {
        //membuat object dari classnya
        $length = $attrs->newInstance();
        $valueLength = strlen($value);

        if ($valueLength < $length->min) {
            throw new Exception("To Short");
        }
        if ($valueLength > $length->max) {
            throw new Exception("To Long");
        }
    }
}

$request = new LoginRequest();
$request->username = "Abys";
$request->password = "Abyakekqdkwkmdkm";
validate($request);
