<?php
session_start();

$menu = [
    1 => ['nama' => 'Nasi Goreng', 'harga' => 20000],
    2 => ['nama' => 'Mee Goreng', 'harga' => 18000],
    3 => ['nama' => 'Ayam Bakar', 'harga' => 25000],
];

if (isset($_POST['tambah'])) {
    $id = $_POST['id'];
    if (isset($menu[$id])) {
        if (!isset($_SESSION['pesanan'][$id])) {
            $_SESSION['pesanan'][$id] = $menu[$id];
            $_SESSION['pesanan'][$id]['jumlah'] = 1;
        } else {
            $_SESSION['pesanan'][$id]['jumlah']++;
        }
    }
} elseif (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    unset($_SESSION['pesanan'][$id]);
}

header('Location: pesanan.php');
