<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping foreach array</title>
</head>

<body>
    <?php
    foreach ($nama as $absen) { // foreach akan otomatis menampilkan semua isi array
        echo "<li>$absen</li>";
    }
    ?>
</body>

</html>