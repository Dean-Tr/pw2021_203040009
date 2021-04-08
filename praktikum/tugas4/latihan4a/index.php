<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");

// Memilih Database
mysqli_select_db($conn, "pw_tubes_203040009");

// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM game");

$no = 1;
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Tanggal Rilis</th>
                <th>Developer</th>
                <th>Publisher</th>
                <th>Genre</th>
                <th>Platform</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><img src="assets/<?= $row["img"]; ?>"></td>
                    <td style="width: 150px;"><?= $row["nama"]; ?></td>
                    <td style="width: 150px;"><?= $row["tgl_rilis"]; ?></td>
                    <td><?= $row["developer"]; ?></td>
                    <td><?= $row["publisher"]; ?></td>
                    <td><?= $row["genre"]; ?></td>
                    <td><?= $row["platform"]; ?></td>
                </tr>
                <?php $no++; ?>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>