<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$game = query("SELECT * FROM game");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Admin</title>
</head>

<body class="bg-dark">
    <div class="my-3 mx-5">
        <a href="tambah.php"><button type="button" class="btn btn-outline-warning m-2">Tambah Data</button></a>
        <table class="table table-dark table-bordered border-white align-middle text-center">
            <tr>
                <th>#</th>
                <th>opsi</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>tanggal rilis</th>
                <th>developer</th>
                <th>publisher</th>
                <th>genre</th>
                <th>platform</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($game as $gm) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $gm['id']; ?>">
                            <button type="button" class="btn btn-outline-primary m-2">Ubah</button>
                        </a>
                        <a href="hapus.php?id=<?= $gm['id']; ?>" onclick="return confirm('Hapus Data??')">
                            <button type="button" class="btn btn-outline-danger m-2">Hapus</button>
                        </a>
                    </td>
                    <td><img src="../assets/<?= $gm['img']; ?>"></td>
                    <td class="text-nowrap"><?= $gm['nama']; ?></td>
                    <td class="text-nowrap"><?= $gm['tgl_rilis']; ?></td>
                    <td><?= $gm['developer']; ?></td>
                    <td><?= $gm['publisher']; ?></td>
                    <td><?= $gm['genre']; ?></td>
                    <td><?= $gm['platform']; ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>