<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
Pertemuan 6 - 11 Maret 2021
Mempelajari mengenai ASSOCIATIVE ARRAY PHP
*/
?>
<?php
// Array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri 
$mahasiswa = [
    [
        "nama" => "Dean Tirta Santika",
        "nrp" => "203040009",
        "email" => "203040009@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img1.jpg"
    ],
    [
        "nama" => "Imaginary Friend",
        "nrp" => "203040000",
        "email" => "203040000@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img2.jpg"
    ],
];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>