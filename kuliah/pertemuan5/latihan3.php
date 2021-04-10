<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
Pertemuan 5 - 4 Maret 2021
Mempelajari mengenai ARRAY PHP
*/
?>
<?php 
$mahasiswa = [
    ["Dean Tirta Santika", "203040009", "Teknik Informatika", "203040009@mail.unpas.ac.id"],
    ["Imaginary Friend", "203040000", "Teknik Informatika", "203040000@mail.unpas.ac.id"],
    ["Raja Terakhir", "203040999", "Teknik Informatika", "203040999@mail.unpas.ac.id"],
];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NRP : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>