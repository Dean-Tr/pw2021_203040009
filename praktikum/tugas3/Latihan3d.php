<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
$pemain = [
    [
        "nama" => "Cristiano Ronaldo",
        "club" => "Juventus",
        "main" => "100",
        "gol" => "76",
        "assist" => "30"
    ],
    [
        "nama" => "Lionel Messi",
        "club" => "Barcelona",
        "main" => "120",
        "gol" => "80",
        "assist" => "12"
    ],
    [
        "nama" => "Luca Modric",
        "club" => "Real Madrid",
        "main" => "87",
        "gol" => "12",
        "assist" => "48"
    ],
    [
        "nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "main" => "90",
        "gol" => "103",
        "assist" => "8"
    ],
    [
        "nama" => "Neymar Jr",
        "club" => "Paris Saint Germain",
        "main" => "109",
        "gol" => "56",
        "assist" => "15"
    ],
    [
        "nama" => "Sadio Mane",
        "club" => "Liverpool",
        "main" => "63",
        "gol" => "30",
        "assist" => "70"
    ],
    [
        "nama" => "Zlatan Ibrahimovic",
        "club" => "Ac Milan",
        "main" => "100",
        "gol" => "10",
        "assist" => "12"
    ],
];
$main = array_sum(array_column($pemain, "main"));
$gol = array_sum(array_column($pemain, "gol"));
$assist = array_sum(array_column($pemain, "assist"));
$no = 1;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 3px;
            text-align: left;
        }

        .center {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>
        <?php foreach ($pemain as $pmn) : ?>
            <tr>
                <td><?= $no; ?></td>
                <?php foreach ($pmn as $id) : ?>
                    <td><?= $id; ?></td>
                <?php endforeach; ?>
                <?php $no++; ?>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td>#</td>
            <td colspan="2" class="center">Jumlah</td>
            <td><?= $main; ?></td>
            <td><?= $gol; ?></td>
            <td><?= $assist; ?></td>
        </tr>
    </table>
</body>

</html>