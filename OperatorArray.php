<?php

$first = [
    "first_name" => "Salsa"
];

$last = [
    "first_name" => "Caca",
    "last_name"  => "Bila"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Salsa",
    "last_name"  => "Sabila"
];

$b = [
    "last_name"  => "Sabila",
    "first_name" => "Salsa"
];

var_dump($a == $b);
var_dump($a === $b);
