<?php

class LoginRequest
{
    public ?string $name;
    public ?string $password;
}

class RegisterRequest
{

    public ?string $name;
    public ?string $email;
    public ?string $password;
}


class ValidationUtill
{
    static function validate(LoginRequest $request)
    {
        if (!isset($request->name)) {
            throw new Exception("Name is required");
        } else if (!isset($request->password)) {
            throw new Exception("Password is required");
        }
    }

    static function validateReflection($request)
    {
        $validate = new ReflectionClass($request);
        $properties = $validate->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new Exception($property->getName() . " is required");
            } else if (is_null($property->getValue($request))) {
                throw new Exception($property->getName() . " cannot be empty");
            }
        }
    }
}

$login = new LoginRequest();
$login->name = "A";
$login->password = "AA";

$register = new RegisterRequest();
$register->name = null;
$register->password = null;

ValidationUtill::validateReflection($login);
ValidationUtill::validateReflection($register);
