<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
Pertemuan 13 - 20 Mei 2021
Mempelajari mengenai Live Searching & Upload Gambar
*/
?>
<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
    $mahasiswa = cari($_POST['keyword']);
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <h3>Daftar Mahasiswa</h3>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus class="keyword">
        <button type="submit" name="cari" class="tombol-cari">Cari!</button>
    </form>
    <br>

    <div class="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>

            <?php if (empty($mahasiswa)) : ?>
                <tr>
                    <td colspan="4">
                        <p style="color:red; font-style:italic">Data mahasiswa tidak ditemukan!</p>
                    </td>
                </tr>
            <?php endif; ?>

            <?php $i = 1;
            foreach ($mahasiswa as $m) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><img src="img/<?= $m["gambar"]; ?>" width="60"></td>
                    <td><?= $m["nama"]; ?></td>
                    <td>
                        <a href="detail.php?id=<?= $m["id"]; ?>">lihat detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <script src="js/script.js"></script>
</body>

</html>