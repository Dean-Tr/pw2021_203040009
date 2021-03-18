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
    <title>Looping for array</title>
</head>

<body>
    <?php
    for ($i = 0; $i < count($nama); $i++) { // Count berguna untuk menentukan jumlah elemen pada array.
        // Sehingga looping akan berhenti ketika isi array sudah tampil
        echo "<li>$nama[$i]</li>";
    }
    ?>
</body>

</html>