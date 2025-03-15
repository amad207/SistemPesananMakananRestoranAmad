<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pengesahan Pesanan - Restoran Amad</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Pengesahan Pesanan</h1>
    <nav>
        <a href="index.php">Laman Utama</a> |
        <a href="menu.php">Menu</a> |
        <a href="pesanan.php">Pesanan</a>
    </nav>

    <?php if (!empty($_SESSION['pesanan'])): ?>
        <p>Pesanan anda telah berjaya disahkan! Terima kasih kerana membuat pesanan di Restoran Amad.</p>
        <?php session_destroy(); ?>
    <?php else: ?>
        <p>Tiada pesanan untuk disahkan.</p>
    <?php endif; ?>
</body>
</html>
