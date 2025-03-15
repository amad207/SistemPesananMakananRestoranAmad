<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Menu Makanan - Restoran Amad</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Menu Makanan</h1>
    <nav>
        <a href="index.php">Laman Utama</a> |
        <a href="menu.php">Menu</a> |
        <a href="pesanan.php">Pesanan</a>
    </nav>

    <?php
    $menu = [
        1 => ['nama' => 'Nasi Goreng', 'harga' => 20000],
        2 => ['nama' => 'Mee Goreng', 'harga' => 18000],
        3 => ['nama' => 'Ayam Bakar', 'harga' => 25000],
    ];
    ?>

    <ul>
        <?php foreach ($menu as $id => $makanan): ?>
            <li>
                <?= $makanan['nama']; ?> - RM<?= number_format($makanan['harga'], 0, ',', '.'); ?>
                <form action="proses.php" method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <button type="submit" name="tambah">Tambah ke Pesanan</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
