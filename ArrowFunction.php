<?php

$firstName = "Salsa";
$lastName = "Sabila";

$anonymousFunction = function () use ($firstName, $lastName): string {
    return "Hello $firstName $lastName" . PHP_EOL;
};

echo $anonymousFunction();
