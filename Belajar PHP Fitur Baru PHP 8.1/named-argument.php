<?php

function sayHello(string $firstName, string $middleName = "Huda", string $lastName)
{
    echo "Hello $firstName $middleName $lastName";
}

sayHello(firstName: "Aby", lastName: "Arrofif");
