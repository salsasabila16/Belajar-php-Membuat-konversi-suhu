<?php

// Menggabungkan array menjadi string
var_dump(join(",", [10, 11, 12, 13, 14, 15]));

// Memecah string menjadi array
var_dump(explode(" ", "Salsa Sabila Humaira"));

// Mengubah seluruh huruf menjadi kecil
var_dump(strtolower("SALSA SABILA HUMAIRA"));

// Mengubah seluruh huruf menjadi besar
var_dump(strtoupper("salsa sabila humaira"));

// Membuat huruf pertama setiap kata menjadi kapital
var_dump(ucwords("salsa sabila humaira"));

// Menghapus spasi di awal dan akhir string
var_dump(trim("        salsa      sabila       "));

// Mengambil sebagian string (substring)
var_dump(substr("Salsa Sabila Humaira", 0, 3));
