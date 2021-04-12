<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
Pertemuan 10 - 22 April 2021
Mempelajari mengenai Koneksi & Insert Data
*/
?>
<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>

<body>
    <h3>Daftar Mahasiswa</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($mahasiswa as $m) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><img src="img/<?= $m["gambar"]; ?>" width="60"></td>
                <td><?= $m["nrp"]; ?></td>
                <td><?= $m["nama"]; ?></td>
                <td><?= $m["email"]; ?></td>
                <td><?= $m["jurusan"]; ?></td>
                <td>
                    <a href="">ubah</a> | <a href="">hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>