<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Salsa", "Sabila", "Humaira"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Caca";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Dewi";
var_dump($names);

var_dump(count($names));

$salsa = array(
    "id" => "Salsa",
    "name" => "Salsa Sabila",
    "age" => 15,
    "address" => array(
        "city" => "Banjar",
        "country" => "Indonesia"
    )
);
var_dump($salsa);

$caca = [
    "id" => "caca",
    "name" => "Caca Bila",
    "age" => 16,
    "address" => [
        "city" => "Bogor",
        "country" => "Indonesia"
    ]
];

var_dump($caca["name"]);
var_dump($caca["address"]["country"]);
