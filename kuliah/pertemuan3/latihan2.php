<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
Pertemuan 3 - 18 Februari 2021
Mempelajari mengenai struktur kendali PHP
*/
?>
<?php
// Pengkondisian / Percabangan
// if else
// if else if else
// ternary
// switch

$x = 20;
if ($x < 20) {
    echo "benar <br>";
} elseif ($x == 20) {
    echo "bingo! <br>";
} else {
    echo "salah <br>";
}

$nama_hari = date("l");
switch ($nama_hari) {
    case 'Sunday':
        echo "Minggu <br>";
        break;
    case 'Monday':
        echo "Senin <br>";
        break;
    case 'Wednesday':
        echo "Rabu <br>";
        break;
    default:
        echo "Nama hari tidak ada <br>";
        break;
}

switch ($nama_hari) {
    case 'Monday':
    case 'Tuesday':
    case 'Wednesday':
        echo "Hari Kerja Biasa <br>";
        break;
    case 'Thursday':
    case 'Friday':
        echo "hari Kerja Lembur <br>";
        break;
    default:
        echo "Hari Libur <br>";
        break;
}

$greeting = (date("H") <= 12) ? "Selamat Pagi" : "Selamat Siang";
echo $greeting;
?>