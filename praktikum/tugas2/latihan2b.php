<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
$jawabanIsset = "Isset adalah = function untuk memeriksa apakah variabel disetel, 
                yang berarti ia harus dideklarasikan dan bukan NULL. Fungsi ini mengembalikan
                nilai true jika variabel ada dan bukan NULL, jika tidak maka mengembalikan false.<br>
                contoh : variabel X = NULL maka akan mengembalikan nilai false.  
                <br><br.";
$jawabanEmpty = "Empty adalah = kebalikan dari function Isset, jika variabelnya tidak kosong
                akan mengembalikan nilai false, sedangkan jika variabelnya kosong akan mengembalikan
                nilai true.<br>
                contoh : variabel X = NULL maka akan mengembalikan nilai true.";

function soal($style)
{
    return "<div class = $style>
                <p>$GLOBALS[jawabanIsset]</p>
                <p>$GLOBALS[jawabanEmpty]</p>
            </div>";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2b</title>
    <style>
        .style {
            border: 2px solid black;
            padding-left: 15px;
        }
    </style>
</head>

<body>
    <?= soal("style");; ?>
</body>

</html>