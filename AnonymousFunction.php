<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Salsa");
$sayHello("Caca");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Salsa", function (string $name): string {
    return strtoupper($name);
});

$stringFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Salsa", $stringFunction);

$firstName = "Salsa";
$lastName = "Sabila";

$sayHelloSalsa = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloSalsa();

$firstName = "Elpin";
$lastName = "Iman";

$sayHelloSalsaRef = function () use (&$firstName, &$lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloSalsaRef();
