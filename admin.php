<?php include 'db/db.php'; ?>
<h2>Senarai Pesanan</h2>
<table>
    <tr>
        <th>Nama</th><th>Alamat</th><th>Status</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM orders");
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['customer_name']}</td><td>{$row['address']}</td><td>{$row['status']}</td></tr>";
    }
    ?>
</table>
