<?php include 'db/db.php'; session_start(); ?>

<?php
if (isset($_POST['submit_order'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $total = $_POST['total'];

    $conn->query("INSERT INTO orders (customer_name, contact, address, total_price) 
                  VALUES ('$name', '$contact', '$address', '$total')");
    
    echo "Pesanan Berjaya!";
    session_destroy();
}
?>

<form method="post">
    <input type="text" name="name" placeholder="Nama" required><br>
    <input type="text" name="contact" placeholder="Nombor Telefon" required><br>
    <textarea name="address" placeholder="Alamat" required></textarea><br>
    <input type="hidden" name="total" value="<?php echo $total; ?>">
    <button type="submit" name="submit_order">Hantar Pesanan</button>
</form>
