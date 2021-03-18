<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
$mahasiswa = [
    "001" => "Ahmad",
    "002" => "Budi",
    "003" => "Chika",
    "004" => "Dhini",
    "005" => "Erwin"
];
// Untuk memasukan value, kita harus membuat key yang mempresentasikan valuenya.
// tanda "=>" dapat diartikan sebagai petunjuk
// "key" => "value" 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSOCIATIVE</title>
</head>

<body>
    <?php
    foreach ($mahasiswa as $nrp => $nama) : ?>
        <li><?php echo "$nrp : $nama" ?></li>
    <?php endforeach; ?>
</body>

</html>