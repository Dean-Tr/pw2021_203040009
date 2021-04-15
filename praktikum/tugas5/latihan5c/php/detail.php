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
    <title>Document</title>
</head>

<body class="bg-dark">
    <div class="card text-center bg-dark text-white">
        <div class="card-header">
            <img src="../assets/<?= $game["img"]; ?>" alt="">
        </div>
        <div class="card-body">
            <h3><?= $game["nama"]; ?></h3>
            <p>Tanggal Rilis: <?= $game["tgl_rilis"]; ?></p>
            <p>Developer: <?= $game["developer"]; ?></p>
            <p>Publisher :<?= $game["publisher"]; ?></p>
            <p>Genre :<?= $game["genre"]; ?></p>
            <p>Platform: <?= $game["platform"]; ?></p>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">
                <a class="text-decoration-none text-white" href="../index.php">Kembali</a>
            </button>
        </div>
    </div>
</body>

</html>