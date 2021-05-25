<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
// menghubungkan dengan file php lainnya
require 'functions.php';

// pagination
$jumlahDataPerhalaman = 4;

if (isset($_GET['keyword'])) {
    $jumlahData = count(cariAdmin($_GET['keyword']));
} else {
    $jumlahData = count(query("SELECT * FROM game"));
}

$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$game = query("SELECT * FROM game LIMIT $awalData, $jumlahDataPerhalaman");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $game = cariLimit($keyword, $awalData, $jumlahDataPerhalaman);
} else {
    $game = query("SELECT * FROM game ORDER BY id ASC LIMIT $awalData, $jumlahDataPerhalaman");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Admin</title>
</head>

<body class="bg-dark mt-0 mx-5">
    <h1 class="text-white text-center p-2">ADMIN</h1>
    <div class="d-flex justify-content-between">
        <div class="">
            <a href="tambah.php" class="text-decoration-none">
                <button type="button" class="btn btn-outline-warning my-0 mx-1">Tambah Data</button>
            </a>

            <a href="logout.php" class="text-decoration-none">
                <button type="button" class="btn btn-outline-danger my-0 mx-1">Logout</button>
            </a>
        </div>
        <div class="">
            <form action="" method="GET" class="d-flex">
                <input type="text" name="keyword" autofocus placeholder="cari" autocomplete="off" class="d-flex input-group input-group-sm form-control">
                <button type="submit" name="cari" class="btn btn-outline-info">Cari!</button>
            </form>
        </div>


    </div>

    <div class="my-2">
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

            <?php if (empty($game)) : ?>
                <tr>
                    <td colspan="9">
                        <h1 class="text-danger">Data tidak ditemukan</h1>
                    </td>
                </tr>
            <?php endif; ?>

            <?php $i = 1; ?>
            <?php foreach ($game as $gm) : ?>
                <tr>
                    <td><?= $i + $awalData; ?></td>
                    <td style="width: 1%;">
                        <a href="ubah.php?id=<?= $gm['id']; ?>">
                            <button type="button" class="btn btn-outline-primary m-2">Ubah</button>
                        </a>
                        <a href="hapus.php?id=<?= $gm['id']; ?>" onclick="return confirm('Hapus Data??')">
                            <button type="button" class="btn btn-outline-danger m-2">Hapus</button>
                        </a>
                    </td>
                    <td><img src="../assets/<?= $gm['img']; ?>" width="200" height="105"></td>
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

    <!-- navigasi -->
    <?php if (isset($_GET['keyword'])) : ?>
        <nav class="Page navigation example float-end">
            <ul class="pagination">
                <li class="page-item">
                    <?php if ($halamanAktif > 1) : ?>
                        <a href="?page=<?= $halamanAktif - 1; ?>&keyword=<?= $_GET['keyword']; ?>" aria-label="Previous" class="page-link">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    <?php endif; ?>
                </li>

                <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                    <?php if ($i == $halamanAktif) : ?>
                        <li class="page-item active" aria-current="page">
                            <a href="?page=<?= $i; ?>&keyword=<?= $_GET['keyword']; ?>" class="page-link"><?= $i; ?></a>
                        </li>
                    <?php else : ?>
                        <li class="page-item">
                            <a href="?page=<?= $i; ?>&keyword=<?= $_GET['keyword']; ?>" class="page-link"><?= $i; ?></a>
                        </li>
                    <?php endif; ?>
                <?php endfor; ?>

                <li class="page-item">
                    <?php if ($halamanAktif < $jumlahHalaman) : ?>
                        <a href="?page=<?= $halamanAktif + 1; ?>&keyword=<?= $_GET['keyword']; ?>" aria-label="Next" class="page-link">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>

    <?php elseif (!isset($_GET['keyword'])) : ?>
        <nav class="Page navigation example float-end">
            <ul class="pagination">
                <li class="page-item">
                    <?php if ($halamanAktif > 1) : ?>
                        <a href="?page=<?= $halamanAktif - 1; ?>" aria-label="Previous" class="page-link">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    <?php endif; ?>
                </li>

                <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                    <?php if ($i == $halamanAktif) : ?>
                        <li class="page-item active" aria-current="page">
                            <a href="?page=<?= $i; ?>" class="page-link"><?= $i; ?></a>
                        </li>
                    <?php else : ?>
                        <li class="page-item">
                            <a href="?page=<?= $i; ?>" class="page-link"><?= $i; ?></a>
                        </li>
                    <?php endif; ?>
                <?php endfor; ?>

                <li class="page-item">
                    <?php if ($halamanAktif < $jumlahHalaman) : ?>
                        <a href="?page=<?= $halamanAktif + 1; ?>" aria-label="Next" class="page-link">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    <?php endif; ?>
    <!-- end navigasi -->

    <footer class="text-center text-white">
        <div class="text-center pt-3 pb-0 mb-0">
            <p class="pb-0 mb-0">© 2021 Copyright: Dean Tirta Santika</p>
        </div>
    </footer>
</body>

</html>