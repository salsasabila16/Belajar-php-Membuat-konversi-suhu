<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Salsa", "strtoupper");
sayHello("Salsa", "strtolower");

sayHello("Salsa", function (string $name): string {
    return strtoupper($name);
});

sayHello("Salsa", fn ($name) => strtoupper($name));
