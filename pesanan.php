<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pesanan Anda - Restoran Amad</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Pesanan Anda</h1>
    <nav>
        <a href="index.php">Laman Utama</a> |
        <a href="menu.php">Menu</a> |
        <a href="pesanan.php">Pesanan</a>
    </nav>

    <?php if (!empty($_SESSION['pesanan'])): ?>
        <ul>
            <?php foreach ($_SESSION['pesanan'] as $id => $item): ?>
                <li>
                    <?= $item['nama']; ?> - RM<?= number_format($item['harga'], 0, ',', '.'); ?> x <?= $item['jumlah']; ?>
                    <form action="proses.php" method="post" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <button type="submit" name="hapus">Hapus</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="pengesahan.php">Sahkan Pesanan</a>
    <?php else: ?>
        <p>Belum ada pesanan.</p>
    <?php endif; ?>
</body>
</html>
