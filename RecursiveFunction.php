<?php

$factorial = function(int $n): int {
    if ($n <= 1) return 1; 
    return $n * $factorial($n - 1);
};

function sayHello(string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

$toUpper = fn($name) => strtoupper($name);
$toLower = function($name) { return strtolower($name); };

sayHello("Salsa", $toUpper);
sayHello("Caca", $toLower);

sayHello("Humaira", function($name) { return strrev($name); });



