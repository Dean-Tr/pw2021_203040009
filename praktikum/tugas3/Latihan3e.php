<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php
$ikan = [
    [
        "gambar" => "baung.jpg",
        "nama" => "Ikan Baung",
        "latin" => "Mystus Nemurus",
        "habitat" => "air tawar (sungai, rawa)",
        "karakteristik" => "Berwarna cokelat kehitaman dengan bagian bawah putih, Kepala besar, Sirip punggung berbentuk bulat dan pendek, Sirip ekor yang bercagak dan agak panjang"
    ],
    [
        "gambar" => "belida.jpg",
        "nama" => "Ikan Belida",
        "latin" => "Chitala Lopis",
        "habitat" => "air tawar (khas Sumatera Selatan)",
        "karakteristik" => "Bentuk tubuh sangat pipih dan melengkung, Sirip bagian bawahnya melengkung seperti pisau, Umumnya berwarna hitam keperakan, Sirip duburnya menyatu dengan sirip ekor"
    ],
    [
        "gambar" => "Belut.jpg",
        "nama" => "Ikan Belut",
        "latin" => "Monopterus albus",
        "habitat" => "air tawar, perairan berlumpur, tepi sungai",
        "karakteristik" => "Badannya panjang seperti ular, Kulitnya licin berlendir, Tidak memiliki sisik, Matanya kecil dan hampir tertutup kulit"
    ],
    [
        "gambar" => "gabus.jpg",
        "nama" => "Ikan Gabus",
        "latin" => "Chnna striata",
        "habitat" => "rawa, sungai, dan perairan yang tenang",
        "karakteristik" => "Kepala besar, Bentuk tubuh bulat, Berwarna hitam dengan bagian bawah putih, Bersisik besar di atas kepala, Sirip punggung memanjang"
    ],
    [
        "gambar" => "gurame.jpg",
        "nama" => "Ikan Gurame",
        "latin" => "Osphronemus goramy",
        "habitat" => "sungai, rawa, dan kolam",
        "karakteristik" => "Badan agak panjang dan pipih, Memiliki sisik yang berukuran besar, Umumnya berwarna hitam keperakan, Memiliki 5 buah sirip"
    ],
    [
        "gambar" => "mujair.jpg",
        "nama" => "Ikan Mujair",
        "latin" => "Oreochromis mossambicus",
        "habitat" => "sungai dan danau air tawar",
        "karakteristik" => "Tubuh bulat pipih, Berwarna kehitaman atau keabuan, kecoklatan, Terdapat jari-jari tajam di sirip punggung"
    ],
    [
        "gambar" => "sepat.jpg",
        "nama" => "Ikan Sepat",
        "latin" => "Trichopodus trichopterus",
        "habitat" => "rawa dataran rendah",
        "karakteristik" => "Sisiknya kecil-kecil, Tubuh agak kecil dan pipih, Sirip punggung terletak dibagian belakang"
    ],
    [
        "gambar" => "tongkol.jpg",
        "nama" => "Ikan Tongkol",
        "latin" => "Euthynnus affinis",
        "habitat" => "perairan laut panas",
        "karakteristik" => "Tubuhnya sedang dan panjang, Dua sirip punggungnya dipisahkan oleh dua celah sempit, Warna agak gelap"
    ],
    [
        "gambar" => "tuna.jpg",
        "nama" => "Ikan Tuna",
        "latin" => "Thunnini",
        "habitat" => "samudera lepas",
        "karakteristik" => "Tubuh memanjang lonjong, Memiliki dua sirip punggung dan satu sirip di dekat dubur"
    ],
    [
        "gambar" => "teri.jpg",
        "nama" => "Ikan Teri",
        "latin" => "Engraulidae",
        "habitat" => "perairan laut dangkal",
        "karakteristik" => "Tubuhnya panjang, Disamping tubuh terdapat bagian putih, Berukuran kecil"
    ]
];
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
                <th>Nama Latin</th>
                <th>Habitat</th>
                <th>Karakteristik</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ikan as $ikn) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><img src="img/<?= $ikn["gambar"]; ?>"></td>
                    <td style="width: 150px;"><?= $ikn["nama"]; ?></td>
                    <td style="width: 150px;"><?= $ikn["latin"]; ?></td>
                    <td><?= $ikn["habitat"]; ?></td>
                    <td><?= $ikn["karakteristik"]; ?></td>
                </tr>
                <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>