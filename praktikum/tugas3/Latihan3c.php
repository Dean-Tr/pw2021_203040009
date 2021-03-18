<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
$orang = [
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Zlatan Ibrahimovic" => "Ac Milan",
    "Neymar Jr" => "Paris Saint Germain",
    "Luca Modric" => "Real Madrid",
    "Sadio Mane" => "Liverpool",
    "Mohammad Salah"  => "Liverpool"
];
ksort($orang);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3 {
            margin: 0 0 15px 0;
        }

        td {
            padding: 2px 15px 2px 2px;
        }

        .border {
            border: 2px solid black;
            width: fit-content;
            padding: 5px;
            padding-right: 150px;
            padding-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="border">
        <h3>Daftar pemain bola terkenal dan clubnya</h3>
        <table>
            <?php
            foreach ($orang as $nama => $club) : ?>
                <?= "<tr>
                <td><strong>$nama</strong></td>
                <td> : $club</td>
            </tr>"; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>