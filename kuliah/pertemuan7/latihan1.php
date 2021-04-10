<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
Pertemuan 7 - 18 Maret 2021
Mempelajari mengenai GET & POST
*/
?>
<?php
// Variable Scope / lingkup variabel
$x = 10;
function tampilX()
{
    global $x;
    echo $x;
}
tampilX();

// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative

// $_GET
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
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&
                email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>
                "><?= $mhs["nama"]; ?> </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>