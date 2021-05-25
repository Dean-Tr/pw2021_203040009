<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$game = query("SELECT * FROM game WHERE id = $id")[0];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/detail.css">
    <title>Detail</title>
</head>

<body class="bg-dark">
    <div class="container">
        <table class="table table-dark table-bordered border-white align-middle text-center my-5">
            <tr>
                <th colspan="3">
                    <h3><?= $game["nama"]; ?></h3>
                </th>
            </tr>
            <tr>
                <td rowspan="5"><img src="../assets/<?= $game["img"]; ?>" width="610" height="320"></td>
                <th>Tanggal Rilis</th>
                <td><?= $game["tgl_rilis"]; ?></td>
            </tr>
            <tr>
                <th>Developer</th>
                <td><?= $game["developer"]; ?></td>
            </tr>
            <tr>
                <th>Publisher</th>
                <td><?= $game["publisher"]; ?></td>
            </tr>
            <tr>
                <th>Genre</th>
                <td><?= $game["genre"]; ?></td>
            </tr>
            <tr>
                <th>Platform</th>
                <td><?= $game["platform"]; ?></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button class="btn btn-primary">
                        <a class="text-decoration-none text-white" href="../index.php">Kembali</a>
                    </button>
                </td>
            </tr>
        </table>
    </div>

    <footer class="text-center text-white">
        <div class="text-center p-3">
            <p>© 2021 Copyright: Dean Tirta Santika</p>
        </div>
    </footer>
</body>

</html>
</body>

</html>