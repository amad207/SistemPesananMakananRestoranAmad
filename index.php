<?php include 'db/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restoran Amad - Menu</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Menu Makanan Restoran Amad</h1>
    <div id="menu">
        <form action="cart.php" method="post">
            <div>
                <h3>Nasi Goreng Ayam - RM10</h3>
                <input type="hidden" name="item_name" value="Nasi Goreng Ayam">
                <input type="hidden" name="item_price" value="10">
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit" name="add_to_cart">Tambah ke Troli</button>
            </div>
        </form>
    </div>
    <a href="cart.php">Lihat Troli</a>
</body>
</html>
