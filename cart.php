<?php session_start(); ?>

<?php
if (isset($_POST['add_to_cart'])) {
    $_SESSION['cart'][] = [
        'item_name' => $_POST['item_name'],
        'item_price' => $_POST['item_price'],
        'quantity' => $_POST['quantity']
    ];
}

if (isset($_POST['checkout'])) {
    header("Location: checkout.php");
}
?>

<h2>Troli Pesanan</h2>
<ul>
    <?php
    $total = 0;
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            echo "<li>{$item['item_name']} x{$item['quantity']} - RM" . ($item['item_price'] * $item['quantity']) . "</li>";
            $total += ($item['item_price'] * $item['quantity']);
        }
    }
    ?>
</ul>
<p>Jumlah: RM<?php echo $total; ?></p>
<form method="post">
    <button type="submit" name="checkout">Checkout</button>
</form>
