<?php

class ValidationException extends Exception
{
}

class LoginRequest
{
    public string $name;
    public string $password;
}

function validateLogin(LoginRequest $loginRequest)
{
    if (!isset($loginRequest->name)) {
        throw new ValidationException("Name is required");
    } else if (!isset($loginRequest->password)) {
        throw new ValidationException("Password is required");
    } else if (trim($loginRequest->name) == "") {
        throw new Exception("Name cannot be empty");
    } else if (trim($loginRequest->password) == "") {
        throw new Exception("Password cannot be empty");
    }
}

$login = new LoginRequest();
$login->name = "Aby";
$login->password = "     ";

try {
    validateLogin($login);
} catch (ValidationException $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
} catch (Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    echo "Error : {$exception->getTraceAsString()}" . PHP_EOL;

    var_dump($exception->getTrace());
} finally {
    echo "Error ngga error tetep jalan" . PHP_EOL;
}
