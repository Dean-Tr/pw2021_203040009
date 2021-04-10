<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
Pertemuan 4 - 25 Februari 2021
Mempelajari mengenai FUNCTION PHP
*/
?>
<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y ") . "<br>";

// Time
// UNIX Timestamp / EPOCH time
echo date("d M Y ", time() - 60 * 60 * 24 * 100) . "<br>";

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l ", mktime(0, 0, 0, 2, 18, 2002)) . "<br>";

// strtotime
echo date("l ", strtotime("18 feb 2002")) . "<br>";

// String Function
// strlen()
$teks1 = "Selamat datang di kuliah pemrograman web 2";
$teks2 = "Universitas Pasundan";
$teks3 = "deantirtas";

echo strlen($teks1) . "<br>";
echo strlen($teks2) . "<br>";
echo strlen($teks3) . "<br>";

// substr()
$tulisan = "Selamat datang di kuliah pemrograman web 2";
echo substr($tulisan, 8) . "<br>";
echo substr($tulisan, 8, 6) . "<br>";
echo substr($tulisan, -17) . "<br>";

// substr_count()
echo substr_count($tulisan, "pemrograman web 2") . "<br>";
echo substr_count($tulisan, "am") . "<br>";
echo substr_count($tulisan, "a") . "<br>";

// str_replace()
echo str_replace("a", "*", $tulisan) . "<br>";
$kuliah = "pemrograman web 2";
echo str_replace($kuliah, "<b>$kuliah</b>", $tulisan) . "<br>";
?>