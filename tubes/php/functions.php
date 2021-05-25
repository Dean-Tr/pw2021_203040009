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

function upload()
{
    $nama_file = $_FILES['img']['name'];
    $tipe_file = $_FILES['img']['type'];
    $ukuran_file = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmp_file = $_FILES['img']['tmp_name'];

    // ketika tidak ada gambar yang di pilih
    if ($error == 4) {
        return 'nophoto.jpg';
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
                alert('yang anda pilih bukan gambar!');
            </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert('yang anda pilih bukan gambar!');
            </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5Mb == 5000000
    if ($ukuran_file > 5000000) {
        echo "<script>
                alert('ukuran terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/' . $nama_file_baru);

    return $nama_file_baru;
}

// function untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    // $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama']);
    $tgl = htmlspecialchars($data['tgl_rilis']);
    $dev = htmlspecialchars($data['developer']);
    $publisher = htmlspecialchars($data['publisher']);
    $genre = htmlspecialchars($data['genre']);
    $platform = htmlspecialchars($data['platform']);

    // upload gambar
    $img = upload();
    if (!$img) {
        return false;
    }

    $query = "INSERT INTO game 
                VALUES
                (NULL, '$img', '$nama', '$tgl', '$dev', '$publisher', '$genre', '$platform')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    // menghapus gambar di folder img
    $gm = query("SELECT * FROM game WHERE id = $id");
    if ($gm[0]['img'] != 'nophoto.jpg') {
        unlink('../assets/' . $gm[0]['img']);
    }


    mysqli_query($conn, "DELETE FROM game WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    // $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama']);
    $tgl = htmlspecialchars($data['tgl_rilis']);
    $dev = htmlspecialchars($data['developer']);
    $publisher = htmlspecialchars($data['publisher']);
    $genre = htmlspecialchars($data['genre']);
    $platform = htmlspecialchars($data['platform']);
    $img_lama = htmlspecialchars($data['img_lama']);

    $img = upload();
    if (!$img) {
        return false;
    }

    if ($img == 'nophoto.jpg') {
        $img = $img_lama;
    }

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

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM game
                WHERE nama LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function cariAdmin($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM game
                WHERE nama LIKE '%$keyword%'
                OR developer LIKE '%$keyword%'
                OR publisher LIKE '%$keyword%'
                OR genre LIKE '%$keyword%'
                OR platform LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function cariLimit($keyword, $awalData, $jumlahDataPerHalaman)
{
    $conn = koneksi();

    $query = "SELECT * FROM game
                WHERE nama LIKE '%$keyword%'
                OR developer LIKE '%$keyword%'
                OR publisher LIKE '%$keyword%'
                OR genre LIKE '%$keyword%'
                OR platform LIKE '%$keyword%' ORDER BY id ASC LIMIT $awalData, $jumlahDataPerHalaman";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function registrasi($data)
{
    $conn = koneksi();

    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    // jika username sudah ada
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan!');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user
                VALUES 
                (null, '$username', '$password')
                ";

    mysqli_query($conn, $query_tambah);
    return mysqli_affected_rows($conn);
}
?>