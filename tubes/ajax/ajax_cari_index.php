<?php
/*
Dean Tirta Santika
203040009
https://github.com/Dean-Tr/pw2021_203040009
Pertemuan 13 - 20 Mei 2021
Mempelajari mengenai Live Searching & Upload Gambar
*/
?>
<?php
require '../php/functions.php';
$game = cari($_GET['keyword']);
?>

<div class="container">
    <?php if (empty($game)) : ?>
        <h2 class="text-center text-danger p-3">Data tidak ditemukan</h2>
    <?php else : ?>
        <div class="d-flex m-5 my-2 bd-highlight flex-wrap align-items-center justify-content-center">
            <?php foreach ($game as $gm) : ?>
                <div class="border border-3 border-white rounded p-4 pb-1 m-2 bd-highlight col-auto mr-auto">
                    <img src="assets/<?= $gm["img"]; ?>" width="310" height="163">
                    <p class="text-center m-1 text-decoration-none text-white"><?= $gm["nama"]; ?></p>
                    </p>
                    <a href="php/detail.php?id=<?= $gm["id"] ?>">
                        <button type="submit" class="btn btn-primary">Detail</button>
                    </a>

                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>