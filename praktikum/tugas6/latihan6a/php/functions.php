<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
shift Rabu 09.00 - 10.00
*/
?>
<?php

// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040009");

    return $conn;
}

// function untuk melakukan query dan memasukannya kedalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama']);
    $tgl = htmlspecialchars($data['tgl_rilis']);
    $dev = htmlspecialchars($data['developer']);
    $publisher = htmlspecialchars($data['publisher']);
    $genre = htmlspecialchars($data['genre']);
    $platform = htmlspecialchars($data['platform']);

    $query = "INSERT INTO game 
                VALUES
                (NULL, '$img', '$nama', '$tgl', '$dev', '$publisher', '$genre', '$platform')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM game WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama']);
    $tgl = htmlspecialchars($data['tgl_rilis']);
    $dev = htmlspecialchars($data['developer']);
    $publisher = htmlspecialchars($data['publisher']);
    $genre = htmlspecialchars($data['genre']);
    $platform = htmlspecialchars($data['platform']);

    $query = "UPDATE game SET
                img = '$img',
                nama = '$nama',
                tgl_rilis = '$tgl',
                developer = '$dev',
                publisher = '$publisher',
                genre = '$genre',
                platform = '$platform'
                WHERE id = $id";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
?>