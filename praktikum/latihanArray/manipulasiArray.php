<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
$hari = ["Senin", "Selasa", "Rabu"];
$angka = ["2", "4", "5", "9", "0"];
echo "Array awal : ";
print_r($hari);
echo "<hr>";

echo "Array setelah di pop : ";
$hasil = array_pop($hari); // Menghapus atau mengambil elemen terakhir dari array
print_r($hari);
echo "<br>Elemen yang di pop : $hasil <hr>";

echo "Array setelah di push : ";
$hasil = array_push($hari, "Rabu", "kamis", "Jum'at"); // Menambahkan beberapa elemen pada akhir array
print_r($hari);
echo "<hr>";

echo "Array setelah di Shift : ";
$hasil = array_shift($hari); // Menghapus atau mengambil elemen pertama pada array
print_r($hari);
echo "Elemen yang di shift : $hasil <hr>";

echo "Hasil array setelah di unshift : ";
$hasil = array_unshift($hari, "Elemen", "Ditambahkan"); // Menambahkan atau lebih elemen array di awal
print_r($hari);
echo "<hr>";

echo "Mengurutkan array secara menaik : ";
$hasil = rsort($angka);
print_r($angka);
echo "<hr>";

echo "Mengurutkan array secara menurun : ";
$hasil = sort($angka);
print_r($angka);
echo "<hr>";
?>