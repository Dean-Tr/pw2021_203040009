<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
$nama = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3 {
            margin: 0;
        }

        .border {
            border: 2px solid black;
            width: fit-content;
            padding: 5px;
            padding-right: 150px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
    <div class="border">
        <h3>Daftar pemain bola terkenal</h3>
        <ol>
            <?php
            foreach ($nama as $nm) {
                echo "<li>$nm</li>";
            }
            ?>
        </ol>
        <h3>Daftar pemain bola terkenal baru</h3>
        <?php
        $hasil = array_push($nama, "Luca Modric", "Sadio Mane");
        $nilai = sort($nama);
        ?>
        <ol>
            <?php
            foreach ($nama as $nm) {
                echo "<li>$nm</li>";
            }
            ?>
        </ol>
    </div>
</body>

</html>