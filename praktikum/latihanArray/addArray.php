<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php

$hari = ["Senin", "Selasa"];

print_r($hari);
echo "</br>";
$hari[] = "Rabu"; // Menambah elemen pada urutan terakhir array
print_r($hari);
echo "</br>";
$hari[3] = "Kamis"; // Menambah elemen pada index yang kita tentukan.
// jika index sudah terisi, maka elemen lama akan
// diganti dengan elemen baru.
print_r($hari);
?>