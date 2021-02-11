<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
Pertemuan 2 - 11 Februari 2021
Mempelajari mengenai sintaks PHP
*/

// Standar Output
// echo, print
// print_r
// var_dump

echo "Dean Tirta Santika ";

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama_depan = "Dean";
$nama_tengah = "Tirta";
$nama_belakang = "Santika";
$x = 10;
$y = 20;

// Operator
// Aritmatika
// + - * / %
echo $x * $y;
echo " ";

// Penggabung String / concatenation / concat
// .
echo $nama_depan . " " . $nama_tengah . " " . $nama_belakang . " ";

// Assignment
// =, +=, -=, *=, /=, %=, .=
echo $x += $y;
echo " ";

// Perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 < 5);

// identitas
// ===, !==
var_dump(1 === "1");

// logika
// &&, ||, !
$z = 10;
var_dump($z < 20 && $z % 2 == 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama_depan; ?></h1>
</body>
</html>