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
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

function luas_dua_kubus ($a, $b) {
    return $a * $a * $a + $b * $b *$b;
}
echo luas_dua_kubus(9, 4) . "<br>";
$hasil = luas_dua_kubus(10, 2);
echo $hasil . "<br>";

$x = 4;
echo luas_dua_kubus($x*3, $x/2) . "<br>";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>

<body>
    <h1><?= salam("pagi", "Dean"); ?></h1>
</body>

</html>